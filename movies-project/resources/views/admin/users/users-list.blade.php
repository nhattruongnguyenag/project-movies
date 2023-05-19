@extends("admin.admin")
@section("content")
<div class="main-content">
    <div class="main-content-inner">
        @include("admin.components.breadcrumb")

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="row">
                        <div class="col-xs-12">
                            @include("admin.components.button-add-delete-group")
                            <table id="simple-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 5rem"></th>
                                        <th class="center">Tên đăng nhập</th>
                                        <th class="center">Email</th>
                                        <th class="center">Trạng thái</th>
                                        <th class="center">Thao tác</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td class="center">
                                            <label class="pos-rel">
                                                <input type="checkbox" class="ace" />
                                                <span class="lbl"></span>
                                            </label>
                                        </td>
                                        <td class="center">{{$user->username}}</td>
                                        <td class="center">{{$user->email}}</td>
                                        <td class="hidden-480 center">
                                            @if($user->status == "active")
                                            <span class="label label-sm label-success">Bình thường</span>
                                            @else
                                            <span class="label label-sm label-warning">Tạm khoá</span>
                                            @endif
                                        </td>
                                        <td class="center">
                                            <div class="hidden-sm hidden-xs btn-group">
                                                @php
                                                $editURI = 'admin/users/' . $user->id . '/edit';
                                                @endphp
                                                <a href="{{url($editURI)}}" class="btn btn-xs btn-info">
                                                    <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                </a>

                                                <button class="btn btn-xs btn-danger">
                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="center">
                                {{ $users->links() }}
                            </div>
                        </div><!-- /.span -->
                    </div><!-- /.row -->
                    <div class="hr hr-18 dotted hr-double"></div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div>
@endsection