<form action="{{ route('search') }}" id="search-form-pc" name="halimForm" role="form" method="GET"
    class="search_wrapper_area">
    @csrf
    <div class="form-group">
        <div class="input-group col-xs-12">
            <input type="text" class="form-control search_input_area" placeholder="Tìm kiếm..." autocomplete="off"
                required oninput="searchEngine(this)" name="name">
            <i class="animate-spin hl-spin4">
            </i>
        </div>
    </div>
</form>
<ul class="ui-autocomplete ajax-results father_contanier_wrapper_result_search hidden" style="width: 200%;left: -50%;">
    <div class="scrollbar" id="style-1">
        <div class="force-overflow container_search_area">

        </div>
    </div>
</ul>