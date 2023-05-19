@extends("admin.admin")
@section("content")
@php
$rolesAPIRoute = "api-roles";
@endphp
@section("content")
<div class="main-content">
    <div class="main-content-inner">
        @include("admin.components.breadcrumb")
        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="widget-box">
                        <div class="widget-header">
                            <h4 class="widget-title">@if(@isset($dataEdit))
                                Cập nhật vai trò
                                @else Thêm vai trò @endif</h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <form class="form-horizontal" role="form">
                                    @csrf
                                    <input id="id" name="id" type="hidden" value="{{$role != null ? $role->id : ''}}">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="name"> Tên vai trò
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" id="name" name="name"
                                                value="{{$role != null ? $role->name : ''}}"
                                                placeholder="Nhập tên vai trò" class="col-xs-12 col-sm-8">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="code"> Slug
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" id="code" name="code"
                                                value="{{$role != null ? $role->code : ''}}" placeholder="Nhập slug"
                                                class="col-xs-12 col-sm-8">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-3 control-label no-padding-right" for="form-field-1"></div>
                                        <div class="col-sm-9">
                                            <button id="submit" type="button" class="btn btn-info btn-sm">
                                                {{$role != null ? "Cập nhật" : "Thêm"}}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div>
<script src="{{asset('admin/assets/js/crud-utils.js')}}"></script>
<script type="text/javascript">
    const btnSubmit = document.querySelector('#submit');
    const id = document.querySelector('#id');
    const name = document.querySelector("#name");
    const code = document.querySelector("#code");
    const url = '{{route($rolesAPIRoute)}}';

    function instanceObjectFromInput() {
        return {
            'id': id.value,
            'name': name.value,
            'code': code.value
        };
    }
    
    btnSubmit.addEventListener('click', async function(event) {
        event.preventDefault();
        let role = instanceObjectFromInput();
        
        if (role.id) {
            update(url, role).then(function(response) {
                console.log(response);
                if (response.status == 201) {
                    alert("Cập nhật vai trò thành công");
                } else {
                    alert("Cập nhật vai trò thất bại");
                }
            });
        } else {
            save(url, role).then(function(response) {
                console.log(response);
                if (response.status == 201) {
                    alert("Thêm vai trò thành công");
                } else {
                    alert("Thêm vai trò thất bại");
                }
            });
        }
    });
</script>
@endsection