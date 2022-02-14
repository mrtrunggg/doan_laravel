<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	


	<link rel="stylesheet" href="{{ asset('user/css/vendor/jquery.range.css') }}">
	<link rel="stylesheet" href="{{ asset('user/css/vendor/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('user/css/vendor/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
	<!-- favicon -->
	<link rel="icon" href="favicon.ico">
	<title>Westeros | Home</title>
    </head>
    @include('user.layout.partials.header')
    <main class="app-content">
        @yield('content')
    </main>
    @include('user.layout.partials.footer')

<!-- jQuery -->
<script src="{{ asset('user/js/vendor/jquery-1.11.1.min.js') }}"></script>
<!-- XM Accordion -->
<script src="{{ asset('user/js/vendor/jquery.xmaccordion.min.js') }}"></script>
<!-- Owl Carrousel -->
<script src="{{ asset('user/js/vendor/owl.carousel.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('user/js/vendor/jquery.magnific-popup.min.js') }}"></script>
<!-- imgLiquid -->
<script src="{{ asset('user/js/vendor/imgLiquid-min.js') }}"></script>
<!-- Header -->
<script src="{{ asset('user/js/header.js') }}"></script>
<!-- Menu -->
<script src="{{ asset('user/js/menu.js') }}"></script>
<!-- Home -->
<script src="{{ asset('user/js/home.js') }}"></script>
<script src="{{ asset('user/js/shop.js') }}"></script>
<script src="{{ asset('user/js/full-view.js') }}"></script>
<script src="{{ asset('user/js/product-builder.js') }}"></script>


</body>
</html>

