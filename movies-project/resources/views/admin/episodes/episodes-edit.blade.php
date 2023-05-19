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
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tập số </label>
                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="Username" class="col-xs-12 col-sm-8">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right"> Danh mục </label>
                            <div class="col-xs-12 col-sm-9">
                                <select class="col-xs-12 col-sm-8" id="form-field-select-3">
                                    <option value="-1" disabled selected>-- Chọn phim --</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Đường dẫn
                            </label>
                            <div class="col-sm-9">
                                <textarea class="col-xs-12 col-sm-8" id="form-field-9" maxlength="50"
                                    rows="4"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Trailer
                            </label>
                            <div class="col-sm-9">
                                <textarea class="col-xs-12 col-sm-8" id="form-field-9" maxlength="50"
                                    rows="4"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Loại </label>
                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="Username" class="col-xs-12 col-sm-8">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-3 control-label no-padding-right" for="form-field-1"></div>
                            <div class="col-sm-9">
                                <button type="button" class="btn btn-info btn-sm">
                                    @if(@isset($dataEdit))
                                    <i class="ace-icon fa-pencil-square-o bigger-110"></i> Cập nhật thông tin phim
                                    @else
                                    <i class="ace-icon fa fa-plus bigger-110"></i> Thêm phim mới
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