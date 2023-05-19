<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>@isset($title)
        {{$title}}
        @endisset</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/font-awesome/4.2.0/css/font-awesome.min.css')}}" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap-duallistbox.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap-multiselect.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/select2.min.css')}}" />

    <!-- text fonts -->
    <link rel="stylesheet" href="{{asset('admin/assets/fonts/fonts.googleapis.com.css')}}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/ace.min.css')}}" class="ace-main-stylesheet"
        id="main-ace-style" />

    <!-- custom styles -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/styles.css')}}">
</head>

<body class="no-skin">
    @include("admin.components.navbar")

    <div class="main-container" id="main-container">
        <script type="text/javascript">
            try{ace.settings.check('main-container' , 'fixed')}catch(e){}
        </script>

        @include("admin.components.sidebar")

        @yield("content")

        @include("admin.components.footer")

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->

    @include("admin.components.scripts")
    @stack("scripts")
</body>

</html>