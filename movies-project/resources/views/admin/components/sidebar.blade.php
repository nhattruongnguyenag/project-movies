<div id="sidebar" class="sidebar                  responsive">
    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="ace-icon fa fa-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="ace-icon fa fa-pencil"></i>
            </button>

            <button class="btn btn-warning">
                <i class="ace-icon fa fa-users"></i>
            </button>

            <button class="btn btn-danger">
                <i class="ace-icon fa fa-cogs"></i>
            </button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li class="@isset($active)
            {{ $active == 'movies' ? 'active' : ''}}
            @endisset">
            <a href="{{route('movies')}}">
                <i class="menu-icon fa fa-film" aria-hidden="true"></i>
                <span class="menu-text">Quản lý phim</span>
            </a>
            <b class="arrow"></b>
        </li>

        <li class="@isset($active)
                {{ $active == 'episodes' ? 'active' : ''}}
            @endisset">
            <a href="{{route('episodes')}}">
                <i class="menu-icon fa fa-file-video-o" aria-hidden="true"></i>
                <span class="menu-text">Quản lý tập phim</span>
            </a>
            <b class="arrow"></b>
        </li>

        <li class="@isset($active)
                    {{ $active == 'categories' ? 'active' : ''}}
                @endisset">
            <a href="{{route('categories')}}">
                <i class="menu-icon fa fa-folder-open-o" aria-hidden="true"></i>
                <span class="menu-text">Quản lý danh mục</span>
            </a>
            <b class="arrow"></b>
        </li>

        <li class="@isset($active)
                        {{ $active == 'genreses' ? 'active' : ''}}
                    @endisset">
            <a href="{{route('genreses')}}">
                <i class="menu-icon fa fa-th-large" aria-hidden="true"></i>
                <span class="menu-text">Quản lý thể loại</span>
            </a>
            <b class="arrow"></b>
        </li>

        <li class="@isset($active)
                        {{ $active == 'users' ? 'active' : ''}}
                    @endisset">
            <a href="{{route('users')}}">
                <i class="menu-icon fa fa-user" aria-hidden="true"></i>
                <span class="menu-text">Quản lý người dùng</span>
            </a>
            <b class="arrow"></b>
        </li>

        <li class="@isset($active)
                                {{ $active == 'roles' ? 'active' : ''}}
                            @endisset">
            <a href="{{route('roles')}}">
                <i class="menu-icon fa fa-key" aria-hidden="true"></i>
                <span class="menu-text">Quản lý vai trò </span>
            </a>
            <b class="arrow"></b>
        </li>

    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left"
            data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>

    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
    </script>
</div>