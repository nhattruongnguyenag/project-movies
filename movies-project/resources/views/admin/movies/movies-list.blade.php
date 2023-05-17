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
                                        <th class="center">Hình ảnh</th>
                                        <th class="center">Tên phim</th>
                                        <th class="center">Quốc gia</th>
                                        <th class="center">Thời lượng</th>
                                        <th class="center">Thao tác</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="center">
                                            <label class="pos-rel">
                                                <input type="checkbox" class="ace" />
                                                <span class="lbl"></span>
                                            </label>
                                        </td>
                                        <td class="center"><img width="150px"
                                                src="https://fphim.tv/uploads/2020/07/10/b9126e7b01e05004fbcfb0531f7b3f13.jpg"
                                                alt="photo"></td>
                                        <td class=" ">NỮ CHÚA RỪNG XANH</td>
                                        <td class="center">Mỹ</td>
                                        <td class="center">117 phút</td>
                                        <td class="center">
                                            <div class="hidden-sm hidden-xs btn-group">
                                                <button class="btn btn-xs btn-info">
                                                    <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                </button>

                                                <button class="btn btn-xs btn-danger">
                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- /.span -->
                    </div><!-- /.row -->
                    <div class="hr hr-18 dotted hr-double"></div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div>
@endsection