@extends('layouts.DashboardLayout')
@section('content-title', '帳號管理')

@section('dashboardContent')
    <div>
        <button type="button" class="btn bt-float" data-toggle="modal" data-target="#create-new-user"  data-backdrop="static" data-keyboard="false">
            <span class="material-icons">add</span>
        </button>  
    </div>
    @include('modal.CreateUserModal')
    <div>
        <table class="table table-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>使用者名稱</th>
                    <th>帳號</th>
                    <th>信箱</th>
                    <th>權限</th>
                    <th class="text-center" style="width: 20%;">操作</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->account }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role_translation }}</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-dark no-margin no-pading" data-toggle="modal" data-target="#edit-user-{{ $user->id }}"  data-backdrop="static" data-keyboard="false">
                                <span class="material-icons" style="color: #607d8b;">create</span>
                            </button>  
                            @include('modal.EditUserModal', ['user' => $user])

                            <form action="{{ route('dashboard.deleteUser', ['userId' => $user->id]) }}" method="post" style="display: inline;">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-secondary no-margin no-pading">
                                    <span class="material-icons" style="color:#f50057;">delete</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="table-empty-text">尚無使用者資料</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if (session('status'))
        <script>
            Swal.fire({
                icon: "{{ session('icon') }}",
                title: "{{ session('title') }}"
            })
        </script>
    @endif
@endsection