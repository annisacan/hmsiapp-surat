<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class RoleAssignmentController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get(); // Ambil semua user dengan relasi roles
        $roles = Role::all(); // Ambil semua roles

        return view('users.roles.index', compact('users', 'roles'));
    }

    public function assignRole(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'role_id' => 'required|exists:roles,id',
        ]);

        $user = User::find($request->user_id);
        $role = Role::find($request->role_id);

        if (!$user || !$role) {
            return redirect()->back()->with('error', 'User or role not found.');
        }

        $user->roles()->syncWithoutDetaching([$role->id]); // Assign role to user

        return redirect()->back()->with('success', 'Role assigned successfully.');
    }

    public function removeRole(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'role_id' => 'required|exists:roles,id',
        ]);

        $user = User::find($request->user_id);
        $role = Role::find($request->role_id);

        if (!$user || !$role) {
            return redirect()->back()->with('error', 'User or role not found.');
        }

        $user->roles()->detach([$role->id]); // Remove role from user

        return redirect()->back()->with('success', 'Role removed successfully.');
    }
}
