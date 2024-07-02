<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Actions\Fortify\ResetUserPassword;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        $roles = Role::all();

        return view('users.kelola.index', compact('users', 'roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'roles' => 'required|array',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->roles()->sync($request->roles);

        return redirect()->route('KelolaUsers')->with('success', 'User berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'id')->all();
        $userRole = $user->roles->pluck('id')->toArray();

        return view('users.kelola.edit', compact('user', 'roles', 'userRole'));
    }

    protected $resetUserPassword;

    public function __construct(ResetUserPassword $resetUserPassword)
    {
        $this->resetUserPassword = $resetUserPassword;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
            'roles' => 'required|array',
        ]);

        $user = User::findOrFail($id);

        // Update user data
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();
        $user->roles()->sync($request->roles);

        return redirect()->route('KelolaUsers')->with('success', 'User berhasil diperbarui.');
    }


    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('KelolaUsers')->with('success', 'User berhasil dihapus.');
    }

    public function profile()
    {
        return view('users.profile.index');
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarPath = $avatar->store('avatars', 'public');
            $user->avatar = $avatarPath;
        }

        $user->save();

        return redirect()->back()->with('status', 'Profile updated successfully.');
    }



    /**
     * Mengubah kata sandi pengguna.
     */
    public function changePassword(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'current_password' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.'])->withInput();
        }

        // Update the user's password
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('status', 'Password updated successfully.');
    }
}
