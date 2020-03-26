<div class="modal fade" id="edit-user-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="editUser" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserTitle">edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="username">使用者名稱</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="username" value="{{ $user->username ?? '' }}">
                    </div>
                    <div class="form-group">
                        <label for="account">帳號</label>
                        <input type="text" class="form-control" id="account" name="account" placeholder="name@example.com" value="{{ $user->account ?? '' }}">
                    </div>
                    <div class="form-group">
                        <label for="email">信箱</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{ $user->email ?? '' }}">
                    </div>
                    <div class="form-group">
                        <label for="password">密碼</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="name@example.com" value="">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">密碼確認</label>
                        <input type="password_confirmation" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="name@example.com" value="">
                    </div>
                    <div class="form-group">
                        <label for="primary_role">權限</label>
                        <select class="form-control" id="primary_role" name="primary_role">
                            <option value="super-admin" {{ $user->primary_role == 'super-admin' ? 'selected' : '' }}>super-admin</option>
                            <option value="admin" {{ $user->primary_role == 'admin' ? 'selected' : '' }}>admin</option>
                            <option value="user" {{ $user->primary_role == 'user' ? 'selected' : '' }}>user</option>
                        </select>
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