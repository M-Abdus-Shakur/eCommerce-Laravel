<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
	<!--plugins-->
	<link href="{{ asset('user-assets/plugins/OwlCarousel/css/owl.carousel.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('user-assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('user-assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('user-assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('user-assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('user-assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('user-assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('user-assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('user-assets/css/icons.css') }}" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<title>eCommerce</title>
    @livewireStyles
</head>

<body>

	<b class="screen-overlay"></b>
	<!--wrapper-->
	<div class="wrapper">
		<!--start top header wrapper-->
		<!--end top header wrapper-->

		<!--start slider section-->
		<!--end slider section-->


		<!--start page wrapper -->
        {{ $slot }}
		<!--end page wrapper -->

		<!--start footer section-->
            @include('livewire._user_partials._footer')
		<!--end footer section-->
		<!--start quick view product-->

		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
	</div>
	<!--end wrapper-->

	<!-- Bootstrap JS -->
	<script src="{{ asset('user-assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('user-assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('user-assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('user-assets/plugins/OwlCarousel/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('user-assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js') }}"></script>
	<script src="{{ asset('user-assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('user-assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<!--app JS-->
	<script src="{{ asset('user-assets/js/app.js') }}"></script>
	<script src="{{ asset('user-assets/js/index.js') }}"></script>
    @livewireScripts
</body>

</html>
