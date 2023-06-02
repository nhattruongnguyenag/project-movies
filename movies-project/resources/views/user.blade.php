<!DOCTYPE html>
<html lang="vi">

<head>
    @include('assets.link_css')
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
            <main id="main-contents" class="col-xs-12 col-sm-12 col-md-8">
                <div class="user_in4_content_area">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="wrapper_left">
                                <div class="base_user_infor">
                                    <div class="base_user_infor_item">
                                        <div class="name">
                                            <h6>NAME</h6>
                                            <p>{{ $user->username }}</p>
                                        </div>
                                        <div class="name">
                                            <div class="wraper_layout">
                                                <h6>Email</h6>
                                                <p>{{ $user->email }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="achivement">
                                    <div class="wraper_layout">
                                        <h6>Số phim đã xem</h6>
                                        <p>{{ $countMovie }}</p>
                                    </div>
                                </div>
                                <div class="achivement">
                                    <div class="wraper_layout">

                                        <h6>Số lần truy cập</h6>
                                        <p>{{ $user->count_access }}</p>
                                    </div>
                                </div>
                                <div class="achivement">
                                    <div class="wraper_layout">

                                        <h6>Số phim đã thích</h6>
                                        <p>{{ $countLike }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="wrapper_right">
                                <div class="image_area">
                                    <img src="{{ URL::asset('images/' . $user->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="chart_number_movies_watched">
                            <div>
                                <canvas id="myChart"></canvas>
                            </div>

                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                            <script>
                                const ctx = document.getElementById('myChart');
                                const arrChart = [ {{ $arr }} ];

                                console.log(arrChart);
                                new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ['T1', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7', 'T8', 'T9', 'T10', 'T11', 'T12'],
                                        datasets: [{
                                            label: '# of Số lượng bộ phim đã xem trong năm nay',
                                            data: arrChart,
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </main>

            @include('modules.topViews')
        </div>
    </div>

    @include('modules.footer')
    @include('assets.link_js');
</body>

</html>
