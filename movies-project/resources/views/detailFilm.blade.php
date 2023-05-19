<!DOCTYPE html>
<html lang="vi">

<head>
    @include('assets.link_css');
</head>

<body class="post-template-default single single-post postid-38424 single-format-standard halimthemes halimmovies"
    data-masonry="">
    @include('modules.header')
    @include('modules.navigation')

    <div class="container">
        <div class="row fullwith-slider"></div>
    </div>
    <div class="container">
        <div class="row container" id="wrapper">
            <div class="halim-panel-filter">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="yoast_breadcrumb hidden-xs"><span><span><a href="danhmuc.php">Phim hay</a> »
                                        <span><a href="danhmuc.php">Mỹ</a> » <span class="breadcrumb_last"
                                                aria-current="page">GÓA PHỤ ĐEN</span></span></span></span></div>
                        </div>
                    </div>
                </div>
                <div id="ajax-filter" class="panel-collapse collapse" aria-expanded="true" role="menu">
                    <div class="ajax"></div>
                </div>
            </div>
            <main id="main-contents" class="col-xs-12 col-sm-12 col-md-8">
                
                @include('modules.contentFilm')

            </main>
            <aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4"></aside>
        </div>
    </div>

    @include('modules.footer')
    @include('assets.link_js');
</body>

</html>
