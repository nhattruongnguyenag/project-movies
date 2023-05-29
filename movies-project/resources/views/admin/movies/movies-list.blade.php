@extends('admin.admin')
@section('content')
    @php
        $APIRoute = 'api-movies';
        $WebRoute = 'movies';
    @endphp
    <div class="main-content">
        <div class="main-content-inner">
            @include('admin.components.breadcrumb')
            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                            <div class="col-xs-12">
                                @include('admin.components.button-add-delete-group')
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
                                        @foreach ($movies as $movie)
                                            <tr>
                                                <td class="center">
                                                    <label class="pos-rel">
                                                        <input type="checkbox" class="ace ids"
                                                            value="{{ $movie->id }}" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </td>
                                                @php
                                                    $imageURI = isset($movie->image) ? 'images/' . $movie->image : 'admin/assets/img-default/default-movie.png';
                                                @endphp
                                                <td class="center" style="width: 250px"><img width="150px"
                                                        src="{{ url($imageURI) }}" alt="photo"></td>
                                                <td>{{ $movie != null ? $movie->name : '' }}</td>
                                                <td class="center">{{ $movie != null ? $movie->country : '' }}</td>
                                                <td class="center">{{ $movie != null ? $movie->duration : '' }}</td>
                                                <td class="center">
                                                    <div class="hidden-sm hidden-xs btn-group">
                                                        @php
                                                            $editURI = 'admin/movies/' . $movie->id . '/edit';
                                                        @endphp
                                                        <a href="{{ url($editURI) }}" class="btn btn-xs btn-info">
                                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                        </a>


                                                        <button data="{{ $movie->id }}" id="btnDelete{{ $movie->id }}"
                                                            class="btn btn-xs btn-danger btn-delete">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="center">
                                    {{ $movies->links() }}
                                </div>
                            </div><!-- /.span -->
                        </div><!-- /.row -->
                        <div class="hr hr-18 dotted hr-double"></div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div>
    <script src="{{ asset('admin/assets/js/crud-utils.js') }}"></script>
    <script src="{{ asset('admin/assets/js/deleteWidget.js') }}"></script>
    <script>
        let apiURL = "{{ route($APIRoute) }}"
        let responseURL = "{{ route($WebRoute) }}"
        deleleRequest(apiURL, responseURL)
    </script>
@endsection
