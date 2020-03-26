<div class="modal fade" id="create-new-user" tabindex="-1" role="dialog" aria-labelledby="createNewUser" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createNewUserTitle">Create New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="username">使用者名稱</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="username" value="123">
                    </div>
                    <div class="form-group">
                        <label for="account">帳號</label>
                        <input type="text" class="form-control" id="account" name="account" placeholder="name@example.com" value="aaa@ex.com">
                    </div>
                    <div class="form-group">
                        <label for="email">信箱</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com" value="aaa@ex.com">
                    </div>
                    <div class="form-group">
                        <label for="password">密碼</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="name@example.com" value="rrrr">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">密碼確認</label>
                        <input type="password_confirmation" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="name@example.com" value="rrrr">
                    </div>
                    <div class="form-group">
                        <label for="primary_role">權限</label>
                        <select class="form-control" id="primary_role" name="primary_role">
                            <option value="super-admin">super-admin</option>
                            <option value="admin">admin</option>
                            <option value="user">user</option>
                            <option value="test">test</option>
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