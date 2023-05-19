@extends("admin.admin")
@section("content")
@php
$genresesAPIRoute = "api-genreses";
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
                                Cập nhật thể loại
                                @else Thêm thể loại @endif</h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        @csrf
                                        <input id="id" name="id" type="hidden"
                                            value="{{$genres != null ? $genres->id : ''}}">

                                        <label class="col-sm-3 control-label no-padding-right" for="name">
                                            Tên thể loại
                                        </label>

                                        <div class="col-sm-6">
                                            <input type="text" name="name" id="name" placeholder="Nhập tên thể loại"
                                                class="col-sm-12" value="{{$genres != null ? $genres->name : ''}}">
                                        </div>

                                        <div class="col-sm-3">
                                            <button type="button" id="submit" class="btn btn-info btn-sm">
                                                @if(@isset($dataEdit))
                                                <i class="ace-icon fa-pencil-square-o bigger-110"></i> Cập nhật
                                                @else
                                                <i class="ace-icon fa fa-plus bigger-110"></i> Thêm
                                                @endif
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
    const inputId = document.querySelector('#id');
    const inputName = document.querySelector("#name");
    const url = '{{route($genresesAPIRoute)}}';
    

    btnSubmit.addEventListener('click', async function(event) {
        event.preventDefault();
        let category = instanceObjectFromInput();
        
        if (category.id) {
            update(url, category).then(function(response) {
                console.log(response);
                if (response.status == 201) {
                    alert("Cập nhật thể loại thành công");
                } else {
                    alert("Cập nhật thể loại thất bại");
                }
            });
        } else {
            save(url, category).then(function(response) {
                console.log(response);
                if (response.status == 201) {
                    alert("Thêm thể loại thành công");
                } else {
                    alert("Thêm thể loại thất bại");
                }
            });
        }
    });

    function instanceObjectFromInput() {
        return {
            'id': inputId.value,
            'name': inputName.value
        };
    }
</script>
@endsection