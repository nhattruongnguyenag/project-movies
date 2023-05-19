@extends("admin.admin")
@section("content")
<div class="main-content">
    <div class="main-content-inner">
        @include("admin.components.breadcrumb")
        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tên đăng nhập
                            </label>
                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="Username" class="col-xs-12 col-sm-8">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email</label>
                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="Username" class="col-xs-12 col-sm-8">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="food">Vai trò</label>

                            <div class="col-sm-9">
                                <select id="food" class="multiselect" multiple="true">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-3 control-label no-padding-right" for="form-field-1"></div>
                            <div class="col-sm-9">
                                <button type="button" class="btn btn-info btn-sm">
                                    @if(@isset($dataEdit))
                                    <i class="ace-icon fa-pencil-square-o bigger-110"></i> Cập nhật
                                    @else
                                    <i class="ace-icon fa fa-plus bigger-110"></i> Thêm
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
@endsection