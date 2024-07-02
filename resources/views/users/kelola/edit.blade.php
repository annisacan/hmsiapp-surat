<!-- Modal -->

<style>
    .modal-body {text-align: left}
</style>
<div class="modal fade" id="ModalEdit{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalEditLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('updateUser', $user->id) }}" method="post" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalEditLabel">{{ __('Edit User') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="name">{{ __('Name') }}</label>
                        <input type="text" name="name" value="{{ $user->name }}" placeholder="Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('Email') }}</label>
                        <input type="text" name="email" value="{{ $user->email }}" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">{{ __('Confirm Password') }}</label>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control">
                    </div>                    
                    <div class="form-group">
                        <label for="roles">{{ __('Role') }}</label>
                        <select name="roles[]" class="form-control">
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}" {{ in_array($role->id, $userRole) ? 'selected' : '' }}>
                                    {{ $role->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('Save changes') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
