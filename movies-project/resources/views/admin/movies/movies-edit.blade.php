@extends("admin.admin")
@php
$moviesAPIRoute = "api-movies";
@endphp
@section("content")
<div class="main-content">
    <div class="main-content-inner">
        @include("admin.components.breadcrumb")
        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <form class="form-horizontal" role="form">
                        @csrf
                        <input id="id" name="id" type="hidden" value="{{$movie != null ? $movie->id : ''}}">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="name"> Tên </label>
                            <div class="col-sm-9">
                                <input type="text" id="name" name="name" value="{{$movie != null ? $movie->name : ''}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="status"> Trạng thái
                            </label>
                            <div class="col-sm-9">
                                <input type="text" id="status" name="status"
                                    value="{{$movie != null ? $movie->status : ''}}" class="col-xs-12 col-sm-8">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="director"> Đạo diễn </label>
                            <div class="col-sm-9">
                                <input type="text" id="director" name="director"
                                    value="{{$movie != null ? $movie->director : ''}}" class="col-xs-12 col-sm-8">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="actor"> Diễn viên
                            </label>
                            <div class="col-sm-9">
                                <textarea class="col-xs-12 col-sm-8" id="actor" name="actor"
                                    rows="4">{{$movie != null ? $movie->actor : ''}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="country"> Quốc gia </label>
                            <div class="col-sm-9">
                                <input type="text" id="country" name="country"
                                    value="{{$movie != null ? $movie->country : ''}}" class="col-xs-12 col-sm-8">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="genreses">Thể
                                loại</label>

                            <div class="col-xs-12 col-sm-9">
                                <select id="genreses" name="genreses" class="multiselect" multiple="true">
                                    @foreach ($genreses as $genres)
                                    <option class="genreses" value="{{$genres->id}}">{{$genres->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="category_id"> Danh mục
                            </label>
                            <div class="col-xs-12 col-sm-9">
                                <select class="col-xs-12 col-sm-8" id="category_id" name="category_id">
                                    <option value="-1" disabled selected>-- Chọn danh mục --</option>

                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}" @isset($movie, $movie->category) {{
                                        $movie->category->id ==
                                        $category->id ? '
                                        selected ' : '' }}
                                        @endisset>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="publish_year"> Năm sản xuất
                            </label>
                            <div class="col-sm-9">
                                <input type="text" id="publish_year" name="publish_year"
                                    value="{{$movie != null ? $movie->publish_year   : ''}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="duration"> Thời lượng
                            </label>
                            <div class="col-sm-9">
                                <input type="text" id="duration" name="duration"
                                    value="{{$movie != null ? $movie->duration : ''}}" class="col-xs-12 col-sm-8">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="description"> Mô tả </label>
                            <div class="col-sm-9">
                                <textarea class="col-xs-12 col-sm-8" id="description" name="description"
                                    rows="4">{{$movie != null ? $movie->description : ''}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-3 control-label no-padding-right" for="form-field-1"></div>
                            <div class="col-sm-9">
                                @php
                                $imageURI = isset($movie->image) ? "images/" . $movie->image :
                                "admin/assets/img-default/default-movie.png";
                                @endphp
                                <img id="imageRender" width="150px" src="{{url($imageURI)}}" alt="photo">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-xs-12">
                                <label class="col-sm-3 control-label" style="padding-right: 6px" for="form-field-1">
                                    Hình ảnh
                                </label>
                                <div class="col-sm-9" style="padding-left: 6px; padding-right: 0">
                                    <label class="col-xs-12 col-sm-8 ace-file-input"><input id="image" name="image"
                                            type="file" id="id-input-file-2"><span class="ace-file-container"
                                            data-title="Chọn file"><span class="ace-file-name" id="reviewFileName"
                                                data-title="No File ..."><i
                                                    class=" ace-icon fa fa-upload"></i></span></span><a class="remove"
                                            href="#"><i class=" ace-icon fa fa-times"></i></a></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-3 control-label no-padding-right" for="form-field-1"></div>
                            <div class="col-sm-9">
                                <button type="button" id="submit" class="btn btn-info btn-sm">
                                    @if(@isset($movie))
                                    Cập nhật phim
                                    @else
                                    Thêm phim mới
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
    const actor = document.querySelector("#actor");
    const director = document.querySelector("#director");
    const name = document.querySelector("#name");
    const description = document.querySelector("#description");
    const status = document.querySelector("#status");
    const image = document.querySelector("#image");
    const imageRender = document.querySelector("#imageRender");
    const reviewFileName = document.querySelector("#reviewFileName");
    const category_id = document.querySelector("#category_id  ");
    const country = document.querySelector("#country");
    const duration = document.querySelector("#duration");
    const publish_year = document.querySelector("#publish_year");
    const genreses = document.querySelectorAll(".genreses");

    let file = null;

    const url = '{{route($moviesAPIRoute)}}';
    const imageUploadUrl = '{{route("upload-image")}}';

    image.addEventListener("change", function(event) {
        file = event.target.files[0];
        reviewFileName.setAttribute('data-title', file.name);
        imageRender.src = URL.createObjectURL(file);
    });


    @isset($movie)
        @foreach($movie->genreses as $genres)
            genreses.forEach(element => {
            if (element.value == {{$genres->id}}) {
            element.selected = true;
            }
            });
            @endforeach
    @endisset

    function instanceObjectFromInput() {
        let genresesArray = [];
        let imageUploadName = null;
        genreses.forEach(element => {
            if (element.selected) {
                genresesArray.push(element.value);
            }
        });

        return {
            'id': id.value,
            'actor': actor.value,
            'director': director.value,
            'name': name.value,
            'description': description.value,
            'status': status.value,
            'image': imageUploadName,
            'category_id': category_id.value,
            'country': country.value,
            'duration': duration.value,
            'publish_year': publish_year.value,
            'genresIds': genresesArray
        };
    }

    btnSubmit.addEventListener('click', async function(event) {
        event.preventDefault();
        let movie = instanceObjectFromInput();

        const formData = new FormData();
                
        formData.append('image', file);
                
        uploadFile(imageUploadUrl, formData).then(function(response) {
            if (response.status == 200) {
                movie.image = response.body.image;
            }

            if (movie.id) {
                update(url, movie).then(function(response) {
                    console.log(response);
                    if (response.status == 201) {
                        alert("Cập nhật phim thành công");
                    } else {
                        alert("Cập nhật phim thất bại");
                    }
                });
            } else {
                save(url, movie).then(function(response) {
                    console.log(response);
                    if (response.status == 201) {
                        alert("Thêm phim thành công");
                    } else {
                        alert("Thêm phim thất bại");
                    }
                });
            }
        });
    });
</script>
@endsection