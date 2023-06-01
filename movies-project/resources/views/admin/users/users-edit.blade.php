@extends("admin.admin")
@section("content")
@php
$usersAPIRoute = "api-users";
@endphp
<div class="main-content">
    <div class="main-content-inner">
        @include("admin.components.breadcrumb")
        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <form class="form-horizontal" role="form">
                        @csrf
                        <input id="id" name="id" type="hidden" value="{{$user != null ? $user->id : ''}}">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="username"> Tên đăng nhập
                            </label>
                            <div class="col-sm-9">
                                <input @isset($user) {{'disabled'}} @endisset type="text" id="username" name="username"
                                    value="{{$user != null ? $user->username : ''}}" placeholder="Nhập tên đăng nhập"
                                    class="col-xs-12 col-sm-8">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email</label>
                            <div class="col-sm-9">
                                <input type="email" id="email" name="email"
                                    value="{{$user != null ? $user->email : ''}}" placeholder="Nhập email"
                                    class="col-xs-12 col-sm-8">
                            </div>
                        </div>

                        @isset($user)
                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="status"> Trạng
                                thái
                            </label>
                            <div class="col-xs-12 col-sm-9">
                                <select class="col-xs-12 col-sm-8" id="status" name="status">
                                    <option value="active" {{$user->status == 'active' ? ' selected ' : ''}}>Bình thường
                                    </option>
                                    <option value="inactive" {{$user->status == 'inactive' ? ' selected ' : ''}}>Tạm
                                        khoá
                                    </option>
                                </select>
                            </div>
                        </div>
                        @endisset

                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="food">Vai trò</label>

                            <div class="col-sm-9">
                                <select id="roles" name="roles" class="multiselect" multiple="true">
                                    @foreach ($roles as $role)
                                    <option class="roles" value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-3 control-label no-padding-right" for="form-field-1"></div>
                            <div class="col-sm-9">
                                <button type="button" id="submit" class="btn btn-info btn-sm">
                                    @if(@isset($user))
                                    Cập nhật
                                    @else
                                    Thêm
                                    @endif
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->

<script src="{{asset('admin/assets/js/crud-utils.js')}}"></script>
<script type="text/javascript">
    const btnSubmit = document.querySelector('#submit');
    const id = document.querySelector('#id');
    const username = document.querySelector('#username');
    const email = document.querySelector('#email');
    const status = document.querySelector('#status');
    const roles = document.querySelectorAll('.roles');

    @isset($user)
        @foreach($user->roles as $role)
            roles.forEach(element => {
                if (element.value == {{$role->id}}) {
                    element.selected = true;
                }
            });
            @endforeach
    @endisset

    function instanceObjectFromInput() {
        let rolesArray = [];
        roles.forEach(element => {
            if (element.selected) {
                rolesArray.push(element.value);
            }
        });

        return {
            'id': id.value,
            'username': username.value,
            'email': email.value,
            'status': status == null ? 1 : status.value,
            'roles': rolesArray,
        };
    }

    const url = '{{route($usersAPIRoute)}}';

    btnSubmit.addEventListener('click', async function(event) {
        event.preventDefault();
        let user = instanceObjectFromInput();
        console.log(user);
        
        if (user.id) {
            update(url, user).then(function(response) {
                console.log(response);
                if (response.status == 201) {
                    alert("Cập nhật thông tin thành công");
                } else {
                    alert("Cập nhật thông tin thất bại");
                }
            });
        } else {
            save(url, user).then(function(response) {
                console.log(response);
                if (response.status == 201) {
                    alert("Thêm người dùng thành công");
                } else {
                    alert("Thêm người dùng thất bại");
                }
            });
        }
    });
</script>
@endsection