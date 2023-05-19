@extends("admin.admin")
@section("content")
@php
$episodesAPIRoute = "api-episodes";
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
                        <input id="id" name="id" type="hidden" value="{{$episode != null ? $episode->id : ''}}">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="episode"> Tập số </label>
                            <div class="col-sm-9">
                                <input type="text" id="episode" name="episode"
                                    value="{{$episode != null ? $episode->episode : ''}}" placeholder="Nhập số tập"
                                    class="col-xs-12 col-sm-8">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="movie_id"> Phim
                            </label>
                            <div class="col-xs-12 col-sm-9">
                                <select class="col-xs-12 col-sm-8" id="movie_id" name="movie_id">
                                    <option value="-1" disabled selected>-- Chọn phim --</option>

                                    @foreach ($movies as $movie)
                                    <option value="{{$movie->id}}" @isset($episode) {{ $episode->movie->id ==
                                        $movie->id ? '
                                        selected ' : '' }}
                                        @endisset>{{$movie->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="link"> Đường dẫn
                            </label>
                            <div class="col-sm-9">
                                <textarea class="col-xs-12 col-sm-8" maxlength="50" rows="4" id="link"
                                    name="link">{{$episode != null ? $episode->link : ''}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="trailer"> Trailer
                            </label>
                            <div class="col-sm-9">
                                <textarea class="col-xs-12 col-sm-8" maxlength="50" rows="4" id="trailer"
                                    name="trailer">{{$episode != null ? $episode->link : ''}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="type"> Loại </label>
                            <div class="col-sm-9">
                                <input type="text" id="type" name="type"
                                    value="{{$episode != null ? $episode->type : ''}}" placeholder="Nhập loại tập"
                                    class="col-xs-12 col-sm-8">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-3 control-label no-padding-right" for="form-field-1"></div>
                            <div class="col-sm-9">
                                <button type="button" id="submit" class="btn btn-info btn-sm">
                                    @if(@isset($episode))
                                    Cập nhật tập phim
                                    @else
                                    <i class="ace-icon fa fa-plus bigger-110"></i> Thêm tập phim mới
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
    const move_id = document.querySelector("#move_id");
    const link = document.querySelector("#link");
    const episode = document.querySelector("#episode");
    const trailer = document.querySelector("#trailer");
    const type = document.querySelector("#type");

    const url = '{{route($episodesAPIRoute)}}';

    function instanceObjectFromInput() {
         return {
            'id': id.value,
            'move_id': movie_id.value,
            'link': link.value,
            'episode': episode.value,
            'trailer': trailer.value,
            'type': type.value
        };
    }
    

    btnSubmit.addEventListener('click', async function(event) {
        event.preventDefault();
        let episode = instanceObjectFromInput();
        console.log(episode);
        if (episode.id) {
            update(url, episode).then(function(response) {
                console.log(response);
                if (response.status == 201) {
                    alert("Cập nhật tập phim thành công");
                } else {
                    alert("Cập nhật tập phim thất bại");
                }
            });
        } else {
            save(url, episode).then(function(response) {
                console.log(response);
                if (response.status == 201) {
                    alert("Thêm tập phim thành công");
                } else {
                    alert("Thêm tập phim thất bại");
                }
            });
        }
    });
</script>
@endsection