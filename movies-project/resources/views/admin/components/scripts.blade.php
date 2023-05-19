@push("scripts")
<script src="{{asset('admin/assets/js/jquery.2.1.1.min.js')}}"></script>

<script type="text/javascript">
	window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
</script>

<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>

<!-- page specific plugin scripts -->
<script src="{{asset('admin/assets/js/jquery.bootstrap-duallistbox.min.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.raty.min.js')}}"></script>
<script src="{{asset('admin/assets/js/bootstrap-multiselect.min.js')}}"></script>
<script src="{{asset('admin/assets/js/select2.min.js')}}"></script>
<script src="{{asset('admin/assets/js/typeahead.jquery.min.js')}}"></script>

<!-- ace scripts -->
<script src="{{asset('admin/assets/js/ace-elements.min.js')}}"></script>
<script src="{{asset('admin/assets/js/ace.min.js')}}"></script>

<!-- inline scripts related to this page -->
<script src="{{asset('admin/assets/js/ace-multiple-select.js')}}"></script>
@endpush