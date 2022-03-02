<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- Favicons -->
		<link type="image/x-icon" href="{{asset('assets_admin/img/favicon.png')}}" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS --> 
		<link rel="stylesheet" href="{{asset('assets_admin/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets_admin/plugins/fontawesome/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets_admin/plugins/fontawesome/css/all.min.css')}}">
		<!-- Daterangepikcer CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">
        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}">
        <style type="text/css">
        	@if(isset($brand_profile))
        	
        	.header {
        		background:{{$brand_profile->color['header_color'] ?? '#2B004F'}}  ;
        	}
        	.footer {
        		background:{{$brand_profile->color['footer_color'] ?? '#2B004F'}}  ;
        	}

        	.loadMore, .commonBtn
        	{
        		background: {{$brand_profile->color['button_color'] ?? 'linear-gradient(292deg, #EE7047 0%, #F40990 100%)'}}  ;
        	}
        	body {
        		color: {{$brand_profile->color['text_color'] ?? '#26292c'}}  ;
        	}
        	 h1, h2, h3, h4, h5, h6 , a{
        	 	color: {{$brand_profile->color['title_color'] ?? '#26292c'}}  ;
        	}
        	.header .navbar-nav>li a {
        		font-family: {{$brand_profile->font['header_font'] ?? 'PloniMedium'}}  ;
        	}

        	.footer-title , .footer .footer-widget p , .inputDiv label , .copyright-text .mb-0 {
        		font-family: {{$brand_profile->font['footer_font'] ?? 'PloniMedium'}}  ;
        	}

        	h1, h2, h3, h4, h5, h6 , a{
        		font-family: {{$brand_profile->font['title_font'] ?? 'PloniDBold'}}  ;
        	}

        	button {
        		font-family: {{$brand_profile->font['button_font'] ?? 'PloniDBold'}}  ;
        	}
        	@endif
        	
        </style>
		@toastr_css
  