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
                                        <th class="center">Tên phim</th>
                                        <th class="center">Tập</th>
                                        <th class="center">Đường dẫn</th>
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
                                        <td class="center">NỮ CHÚA RỪNG XANH</td>
                                        <td class="center">1</td>
                                        <td class="left" style="width: 50%">{{'<iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/LPMvPFzsVlM"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>'}}</td>
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