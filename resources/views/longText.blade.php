<div>
    <button type="button" class="btn bt-float" data-toggle="modal" data-target="#exampleModalCenter">
        <span class="material-icons">add</span>
    </button>  
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">使用者名稱</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">帳號</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">密碼</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">權限</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>super-admin</option>
                            <option>admin</option>
                            <option>user</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-center">
        <thead>
            <tr>
                <th>#</th>
                <th>帳號</th>
                <th>使用者名稱</th>
                <th>權限</th>
                <th class="text-center" style="width: 20%;">操作</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 30; $i++)
                <tr>
                    <td scope="row">{{ $i }}</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-dark no-margin no-pading">
                            <span class="material-icons" style="color: #607d8b;">create</span>
                        </button>
                        <button type="button" class="btn btn-secondary no-margin no-pading">
                            <span class="material-icons" style="color:#f50057;">delete</span>
                        </button>
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
</div>