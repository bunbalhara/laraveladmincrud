<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="utf-8" />
		<title>LOVECODING714</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<link href="{{asset('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/vendors/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/backend/css/custom.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css" />

		@yield('page_styles')
	</head>

	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<div class="m-grid m-grid--hor m-grid--root m-page">

				@include('includes.backend.header')
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

			 	@include('includes.backend.left_sidebar')

				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							@yield('page_sub_title')
						</div>
					</div>

					<!-- END: Subheader -->
					<div class="m-content">
						@yield('page_content')
					</div>
				</div>
			</div>
				@include('includes.backend.footer')
		</div>
        @include('includes.backend.right_sidebar')

        <div id="m_scroll_top" class="m-scroll-top">
            <i class="la la-arrow-up"></i>
        </div>

		<script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/vendors/base/scripts.bundle.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/toastr/toastr.min.js')}}" type="text/javascript"></script>

		@yield('page_scripts')

	</body>

    @if ($message = Session::get('success'))
        <script>toastr.success('{!! $message !!}')</script>
    @endif

    @if ($message = Session::get('error'))
        <script>toastr.error('{!! $message !!}')</script>
    @endif
</html>
