<div class="clearfix">
    <div class="pull-right tableTools-container">
        <div class="btn-group btn-overlap">
            <div class="ColVis btn-group" title="" data-original-title="Show/hide columns">
                <a href="@isset($formEditUri)
                                                {{route($formEditUri)}}
                                            @endisset"
                    class="ColVis_Button ColVis_MasterButton btn btn-white btn-info btn-bold">
                    <span><i class="glyphicon-plus"></i></span>
                </a>
            </div>
            <button class="DTTT_button btn btn-white btn-primary  btn-bold" title="" tabindex="0"
                aria-controls="dynamic-table" data-original-title="Print view" id="btnDeleteBuilding">
                <span><i class="ace-icon fa fa-trash-o"></i></span>
            </button>
        </div>
    </div>
</div>