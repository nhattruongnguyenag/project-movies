<!DOCTYPE html>
<html lang="vi">

<head>
    @include('assets.link_css')
</head>

<body class="home blog halimthemes halimmovies" data-masonry="">

    @include('modules.header')
    @include('modules.navigation')


    <div class="container">
        <div class="row fullwith-slider"></div>
    </div>
    <div class="container">
        <div class="row container" id="wrapper">
            <div class="halim-panel-filter">
                <div id="ajax-filter" class="panel-collapse collapse" aria-expanded="true" role="menu">
                    <div class="ajax"></div>
                </div>
            </div>

            @include('modules.listNewFilm')

            <main id="main-contents" class="col-xs-12 col-sm-12 col-md-8">

                @include('modules.listTypeFilm')
                @include('modules.listTypeFilm')
                @include('modules.listTypeFilm')

                <div class="clearfix"></div>
            </main>
            
            @include('modules.topViews')
        </div>
    </div>
    

    @include('modules.footer')
    @include('assets.link_js')
</body>

</html>
