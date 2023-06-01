<section id="content" class="test">
    <div class="clearfix wrap-content">

        <iframe width="100%" height="500" src="{{ $movieWatch->link }}" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

        <div class="button-watch">
            <ul class="halim-social-plugin col-xs-4 hidden-xs">
                <li class="fb-like" data-href="" data-layout="button_count" data-action="like" data-size="small"
                    data-show-faces="true" data-share="true"></li>
            </ul>
            <ul class="col-xs-12 col-md-8">
                <div id="autonext" class="btn-cs autonext">
                    <i class="icon-autonext-sm"></i>
                    <span><i class="bi bi-body-text"></i> Autonext: <span id="autonext-status">On</span></span>
                </div>
                <div id="explayer" class="hidden-xs"><i class="bi bi-arrows-angle-expand"></i>
                    Expand
                </div>
                <div id="toggle-light"><i class="bi bi-lightbulb-off"></i>
                    Light Off
                </div>
                <div class="luotxem"><i class="bi bi-eye"></i>
                    <span>1K</span> lượt xem
                </div>
                <div class="luotxem">
                    <a class="visible-xs-inline" data-toggle="collapse" href="#moretool" aria-expanded="false"
                        aria-controls="moretool"><i class="hl-forward"></i>
                        Share</a>
                </div>
            </ul>
        </div>
        <div class="collapse" id="moretool">
            <ul class="nav nav-pills x-nav-justified">
                <li class="fb-like" data-href="" data-layout="button_count" data-action="like" data-size="small"
                    data-show-faces="true" data-share="true"></li>
                <div class="fb-save" data-uri="" data-size="small"></div>
            </ul>
        </div>

        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="title-block">
            <a href="javascript:;" data-toggle="tooltip" title="Add to bookmark">
                <div id="bookmark" class="bookmark-img-animation primary_ribbon" data-id="37976">
                    <div class="halim-pulse-ring"></div>
                </div>
            </a>
            <div class="title-wrapper-xem full">
                <h1 class="entry-title"><a href="" title="Tôi Và Chúng Ta Ở Bên Nhau"
                        class="tl">{{ $movie->name }} Tập {{ $movieWatch->episode }}</a></h1>
            </div>
        </div>
        <div class="entry-content htmlwrap clearfix collapse" id="expand-post-content">
            <article id="post-37976" class="item-content post-37976"></article>
        </div>
        <div class="clearfix"></div>
        <div class="text-center">
            <div id="halim-ajax-list-server"></div>
        </div>
        <div id="halim-list-server">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active server-1"><a href="#server-0" aria-controls="server-0"
                        role="tab" data-toggle="tab"><i class="bi bi-database-fill"></i> {{ $movieWatch->type }}</a>
                </li>
            </ul>
            <ul class="list-group list-group-horizontal-md" style="background: rgba(54,71,86,.13); margin-top: 10px">
                @foreach ($movie->episodes() as $key => $item)
                    @if ($key == $movieWatch->episode - 1)
                        <li class="list-group-item btn btn-primary" style="margin-right: 5px"><a
                                href="http://127.0.0.1:8000/watch?id={{ $movie->id }}&episode={{ $item->episode }}">{{ $item->episode }}</a>
                        </li>
                    @else
                        <li class="list-group-item btn btn-dark" style="margin-right: 5px"><a
                                href="http://127.0.0.1:8000/watch?id={{ $movie->id }}&episode={{ $item->episode }}">{{ $item->episode }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="clearfix"></div>
        <div class="htmlwrap clearfix">
            <div id="lightout"></div>
        </div>
</section>

@include('modules.relatedMovie')
@include('modules.comment')

