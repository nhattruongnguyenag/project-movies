<div class="filter_">
    <form action="{{ route('filmFilterActivity') }}" method="get">
        <select class="form-select" aria-label="Default select example" name="genre">
            <option selected value="0">-- Thể loại --</option>
            @foreach ($genres as $item)
                @if (isset($oldInput))
                    @if ($oldInput->genre == $item->id)
                        <option selected value="{{ $item->id }}">{{ $item->title }}</option>
                    @else
                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                    @endif
                @else
                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                @endif
            @endforeach
        </select>
        <select class="form-select" aria-label="Default select example" name="country">
            <option selected value="0">-- Quốc gia --</option>
            @foreach ($countries1 as $item)
                @if (isset($oldInput))
                    @if ($oldInput->country == $item->country)
                        <option selected value="{{ $item->country }}">{{ $item->country }}</option>
                    @else
                        <option value="{{ $item->country }}">{{ $item->country }}</option>
                    @endif
                @else
                    <option value="{{ $item->country }}">{{ $item->country }}</option>
                @endif
            @endforeach
        </select>
        <select class="form-select" aria-label="Default select example" name="yearPublish">
            <option selected value="0">-- năm --</option>
            @foreach ($yearPublish as $item)
                @if (isset($oldInput))
                    @if ($oldInput->yearPublish == $item->publish_year)
                    <option selected value="{{ $item->publish_year }}">{{ $item->publish_year }}</option>
                    @else
                    <option value="{{ $item->publish_year }}">{{ $item->publish_year }}</option>
                    @endif
                @else
                <option value="{{ $item->publish_year }}">{{ $item->publish_year }}</option>
                @endif
            @endforeach
        </select>
        <button type="submit" class="btn_film_filter">Lọc phim</button>
    </form>
</div>
<div class="halim_box">
    @isset($value)
        @foreach ($value as $item)
            <article class="col-md-3 col-sm-3 col-xs-6 thumb grid-item post-27021">
                <div class="halim-item">
                    {{-- href="{{ route('detail', ['id' => $item->move_id]) }}" --}}
                    <a class="halim-thumb"  title="VŨNG LẦY PHẦN 1">
                        <figure><img class="lazy img-responsive" src="{{ URL::asset('images/' . $item->image) }}"
                                alt="VŨNG LẦY PHẦN 1" title="VŨNG LẦY PHẦN 1"></figure>
                        <div class="icon_overlay"></div>
                        <div class="halim-post-title-box">
                            <div class="halim-post-title ">
                                <p class="entry-title">{{ $item->name }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </article>
        @endforeach
    @endisset
</div>
@isset($defects)
    <script>
        alert('hãy nhập thông tin để lọc!');
    </script>
@endisset
