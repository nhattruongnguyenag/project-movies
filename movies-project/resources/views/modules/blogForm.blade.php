<head>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>
<div class="wrapper_create_blog" style="width: 980px;overflow: hidden;">
    <div class="card">
        @if (isset($blog))
            <h5 class="card-header text-center">UPDATE YOUR BLOG</h5>
        @else
            <h5 class="card-header text-center">CREATE YOUR BLOG</h5>
        @endif
        <div class="card-body">
            <form action="{{ route('createBlog') }}" role="form" data-toggle="validator" method="POST"
                enctype="multipart/form-data">
                @csrf
                @if (isset($blog))
                    <input type="hidden" value="{{ $blog->id }}" name="id">
                @endif
                <div class="form-group">
                    <label>Title (<span style="color: red;">warning do not insert img</span>)</label>
                    <textarea name="title_crik">
                        @if (isset($blog))
                        {{ $blog->title }}
                        @endif
                        @if (isset($value))
                            {{ $value->title_crik }}
                        @endif
                      </textarea>
                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label>Content (<span style="color: red;">warning do not insert img</span>)</label>
                    <textarea name="content_crik">
                        @if (isset($blog))
                        {{ $blog->content }}
                        @endif
                        @if (isset($value))
                            {{ $value->content_crik }}
                        @endif
                      </textarea>
                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>
                @if (isset($blog))
                    <img style="width: 830px;height: 400px;border: 1px solid wheat;"
                        src="{{ URL::asset('images/' . $blog->image) }}" alt="" class="display_img_area">
                @endif
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" onchange="getImg(this)">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace('content_crik');
    CKEDITOR.replace('title_crik');
</script>
@isset($defect)
    @switch($defect)
        @case(0)
            <script>
                alert('Hãy nhập thông tin!');
            </script>
        @break

        @case(1)
            <script>
                alert('Đã taọ thành công blog!');
            </script>
        @break

        @case(2)
            <script>
                alert('Tạo blog thất bại!');
            </script>
        @break

        @case(3)
            <script>
                alert('Hãy nhập đúng loại định dạng hình ảnh để tạo file!');
            </script>
        @break

        @case(4)
            <script>
                alert('Cập nhật blog thành công!');
            </script>
        @break

        @case(5)
            <script>
                alert('Cập nhật blog không thành công!');
            </script>
        @break

        @default
    @endswitch
@endisset
@if (session('update_fail'))
    <div class="alert alert-warning">
        <script>
            alert('Cập nhật không thành công!');
        </script>
    </div>
@endif

<script>
    let areaImgDisplay = document.querySelector('.display_img_area');

    function getImg(params) {
        var file = params.files[0];
        var imageURL;

        if (file) {
            imageURL = URL.createObjectURL(file);
            areaImgDisplay.src = imageURL;
        }
    }
</script>
