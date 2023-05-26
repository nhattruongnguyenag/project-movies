@extends('admin.admin')
@section('content')
    @php
        $APIRoute = 'api-episodes';
        $WebRoute = 'episodes';
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
                                            <th class="center">Tên phim</th>
                                            <th class="center">Tập</th>
                                            <th class="center">Đường dẫn</th>
                                            <th class="center">Thao tác</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($episodes as $episode)
                                            <tr>
                                                <td class="center">
                                                    <label class="pos-rel">
                                                        <input type="checkbox" class="ace ids"
                                                            value="{{ $episode->id }}" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </td>
                                                <td class="center">{{ $episode->movie->name ?? '' }}</td>
                                                <td class="center">{{ $episode->episode ?? '' }}</td>
                                                <td class="left" style="width: 50%">{{ $episode->link ?? '' }}</td>
                                                <td class="center">
                                                    <div class="hidden-sm hidden-xs btn-group">
                                                        @php
                                                            $editURI = 'admin/episodes/' . $episode->id . '/edit';
                                                        @endphp
                                                        <a href="{{ url($editURI) }}" class="btn btn-xs btn-info">
                                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                        </a>

                                                        <button data="{{ $episode->id }}" id="btnDelete{{ $episode->id }}"
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
                                    {{ $episodes->links() }}
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
