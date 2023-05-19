@extends("admin.admin")
@section("content")
@php
$categoryWebRoute = "categories";
$categoryAPIRoute = "api-categories";
@endphp
<div class="main-content">
    <div class="main-content-inner">
        @include("admin.components.breadcrumb")
        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="widget-box">
                        <div class="widget-header">
                            <h4 class="widget-title">@if(@isset($category))
                                Cập nhật danh mục
                                @else Thêm danh mục @endif</h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <form class="form-horizontal">
                                    @csrf
                                    <input id="id" name="id" type="hidden"
                                        value="{{$category != null ? $category->id : ''}}">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="name">
                                            Tên danh mục
                                        </label>

                                        <div class="col-sm-6">
                                            <input id="name" type="text" name="name" id="name"
                                                placeholder="Nhập tên danh mục" class="col-sm-12"
                                                value="{{$category != null ? $category->name : ''}}">
                                        </div>

                                        <div class="col-sm-3">
                                            <button id="submit" type="button" class="btn btn-info btn-sm">
                                                {{$category != null ? "Cập nhật" : "Thêm"}}
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
    const url = '{{route($categoryAPIRoute)}}';
    

    btnSubmit.addEventListener('click', async function(event) {
        event.preventDefault();
        let category = instanceObjectFromInput();
        
        if (category.id) {
            update(url, category).then(function(response) {
                if (response.status == 201) {
                    alert("Cập nhật danh mục thành công");
                    window.location.href = "{{route($categoryWebRoute)}}";
                } else {
                    alert("Cập nhật danh mục thất bại");
                }
            });
        } else {
            save(url, category).then(function(response) {
                if (response.status == 201) {
                    alert("Thêm danh mục thành công");
                    window.location.href = "{{route($categoryWebRoute)}}";
                } else {
                    alert("Thêm danh mục thất bại");
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