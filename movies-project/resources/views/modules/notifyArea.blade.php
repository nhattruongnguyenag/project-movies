@if (isset($notify))
    @for ($i = 0; $i < count($notify); $i++)
        @if ($notify[$i]->status != 1)
            <div class="movie_movies_item"
                style="background: black;border-radius: 5px;overflow: hidden;margin-bottom: 10px;border: 1px solid white;">
                <div class="row">
                    <div class="col-md-2" style="text-align: center;">
                        <i style="font-size: 40px;color: rgb(31, 244, 8);background: white;padding: 0 10px;border-radius: 50%;"
                            class="bi bi-bell-fill"></i>
                    </div>
                    <div class="col-md-9">
                        <div class="content_wrapper" style="display: flex;justify-content: center;align-items: center;">
                            <div style="text-align: left|center;padding: 0 10px;" class="wrapper_content_area">
                                {!! $notify[$i]->content !!}
                            </div>
                        </div>
                        <div class="footer_blog_item_wraper">
                        </div>
                    </div>
                    <div class="col-md-1"
                        style="height: 65px;display: flex;
                    justify-content: center;
                    align-items: center;">
                        <form action="{{ route('deleteNotify') }}" method="POST"
                            onsubmit="return confirm('Ban co muon xoa danh muc nay khong?');" style="color: red;">
                            @csrf
                            <input type="hidden" value="{{ $notify[$i]->id }}" name="id">
                            <button style="submit">
                                <i style="font-size: 20px;" class="bi bi-eye-slash-fill"></i>
                            </button>
                        </form>
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
                    Bạn chưa có thông báo !.
                </h2>
            </a>
        </div>
    </div>
@endif
