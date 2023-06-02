@if ($blogs)
    @for ($i = 0; $i < count($blogs); $i++)
        @if ($blogs[$i]->status != 1)
            <div class="movie_movies_item"
                style="background: black;border-radius: 5px;overflow: hidden;margin-bottom: 10px;">
                <div class="row">
                    <a href="{{ route('readBlog', ['id' => $blogs[$i]->id]) }}">
                        <div class="col-md-3">
                            <div class="wraper_img" style="width: 200px;height: 200px;overflow: hidden;">
                                <div class="item-link image_search_result">
                                    <img src="{{ URL::asset('images/' . $blogs[$i]->image) }}" class="lazy post-thumb"
                                        alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="col-md-9">
                        <div class="content_wrapper">
                            <a href="{{ route('readBlog', ['id' => $blogs[$i]->id]) }}" class="name_movie_searh_result">
                                <h2 class="title_blog_wrapper">
                                    {!! $blogs[$i]->title !!}
                                </h2>
                            </a>
                            <div style="text-align: left;" class="wrapper_content_area">
                                {!! $blogs[$i]->content !!}
                            </div>
                        </div>
                        <div class="footer_blog_item_wraper">
                            <a href="{{ route('readBlog', ['id' => $blogs[$i]->id]) }}">Read more </a>
                            <p> {{ $blogs[$i]->view_count }} lượt đọc</p>
                        </div>
                        @if (isset($user_id) && $user_id == $blogs[$i]->user_id)
                            <div class="footer_blog_item_wraper" style="width: 80px;font-size: 20px;">
                                <form action="{{ route('deleteBlog') }}" method="POST"
                                    onsubmit="return confirm('Ban co muon xoa danh muc nay khong?');"
                                    style="color: red;">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $blogs[$i]->id }}">
                                    <button type="submit">
                                        <i class="bi bi-file-earmark-x"></i>
                                    </button>
                                </form>
                                <form action="{{ route('editBlog') }}" method="POST" style="color: green;">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $blogs[$i]->id }}">
                                    <button type="submit">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    @endfor
@else
    <div class="movie_movies_item" style="background: black;border-radius: 5px;overflow: hidden;margin-bottom: 10px;">
        <div class="content_wrapper">
            <a href="" class="name_movie_searh_result">
                <h2 class="title_blog_wrapper">
                    Xin lỗi trang Blogs chưa có bài viết!.
                </h2>
            </a>
            <div class="notification_wrapper" style="text-align: left; padding: 0 10px;">
                <p class="wrapper_content_area">
                    vì một số lý do chúng tôi vẫn chưa có thể cập nhập các bài viết mới nhất, chúng tôi sẽ cố gắng khắc
                    phục
                    sớm
                    nhất và bạn cũng có thể
                    đóng góp các bài viết với chúng tôi , chúng tôi rất hoan nghênh đóng góp của bạn.
                </p>
                <div class="admin_intro" style="text-align: right;">From admin: <a href="">THBT</a></div>
            </div>
        </div>
    </div>
@endif
<div class="wrapper_pagination" style="text-align: center;">
    @if ($blogs)
        {{ $blogs->links('pagination::bootstrap-4') }}
    @endif
</div>
@if (session('success'))
    <div class="alert alert-success">
        <script>
            alert('xoa thanh cong nha ban!');
        </script>
    </div>
@endif
