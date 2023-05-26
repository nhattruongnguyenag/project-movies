@extends('admin.admin')
@section('content')
    @php
        $APIRoute = 'api-roles';
        $WebRoute = 'roles';
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
                                            <th class="center">Tên vai trò</th>
                                            <th class="center">Thao tác</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($roles as $role)
                                            <tr>
                                                <td class="center">
                                                    <label class="pos-rel">
                                                        <input type="checkbox" class="ace ids"
                                                            value="{{ $role->id }}" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </td>
                                                <td class="center">{{ $role->name }}</td>
                                                <td class="center">
                                                    <div class="hidden-sm hidden-xs btn-group">
                                                        @php
                                                            $editURI = 'admin/roles/' . $role->id . '/edit';
                                                        @endphp
                                                        <a href="{{ url($editURI) }}" class="btn btn-xs btn-info">
                                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                        </a>

                                                        <button data="{{ $role->id }}" id="btnDelete{{ $role->id }}"
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
                                    {{ $roles->links() }}
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
