<!-- Edit User Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form id="editUserForm" action="" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="edit_user_id" name="id">
                <div class="form-group">
                    <label for="edit_name">Nama</label>
                    <input type="text" class="form-control" id="edit_name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="edit_email">Email</label>
                    <input type="email" class="form-control" id="edit_email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="edit_role">Role</label>
                    <select class="form-control" id="edit_role" name="role" required>
                        <option value="anggota">Anggota</option>
                        <option value="kahim">Kahim</option>
                        <option value="sekretaris">Sekretaris</option>
                        <option value="bendahara">Bendahara</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="edit_password">Password (optional)</label>
                    <input type="password" class="form-control" id="edit_password" name="password">
                </div>
                <div class="form-group">
                    <label for="edit_password_confirmation">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="edit_password_confirmation"
                        name="password_confirmation">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
</div>
</div>