<div class="breadcrumbs" id="breadcrumbs">
    <script type="text/javascript">
        try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
    </script>

    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="{{route('movies')}}">Trang chủ</a>
        </li>

        @isset($linkedPage)
        <li>
            <a href="{{$linkedPage['link']}}">{{$linkedPage['name']}}</a>
        </li>
        @endisset

        <li class="active">@isset($currentPage)
            {{$currentPage}}
            @endisset</li>

    </ul><!-- /.breadcrumb -->

    <div class="nav-search" id="nav-search">
        <form class="form-search">
            <span class="input-icon">
                <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input"
                    autocomplete="off" />
                <i class="ace-icon fa fa-search nav-search-icon"></i>
            </span>
        </form>
    </div><!-- /.nav-search -->
</div>