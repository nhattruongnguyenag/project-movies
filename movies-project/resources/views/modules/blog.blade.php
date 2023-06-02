<div class="content_blog_wrapper">
    <div class="autho">
        Tác giả : {{ $blog->username }}
    </div>
    <div class="time_publish">
        Thời điểm đăng bài : {{ $blog->time_create }}
    </div>
    <div class="image_wrapper" style="width: 100%;height: 500px;overflow: hidden; background: blue;">
        <img style="object-fit: cover;object-position: center;width: 100%;"
            src="{{ URL::asset('images/'.$blog->image) }}" class="lazy post-thumb"
            alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
    </div>
    <h2>{!! $blog->title !!}</h2>
    <p>
        {!! $blog->content !!}
    </p>
</div>
F
