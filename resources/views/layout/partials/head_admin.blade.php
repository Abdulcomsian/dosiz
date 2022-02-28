<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        @if(!Route::is(['mentor','mentee','booking-list','categories','transactions-list','settings','invoice-report','profile','blog','blog-details','add-blog','edit-blog','login','register','forgot-password',
        'lock-screen','error-404','error-500','blank-page','components','form-basic-inputs','form-input-groups','form-horizontal','form-vertical','form-mask','form-validation','tables-basic','data-tables']))
        @endif
        

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets_admin/img/favicon.png')}}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets_admin/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('assets_admin/css/font-awesome.min.css')}}">
        @if(Route::is(['add-blog','blog-details','blog','edit-blog']))
        <link rel="stylesheet" href="{{asset('assets_admin/plugins/fontawesome/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets_admin/plugins/fontawesome/css/all.min.css')}}">
        @endif
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{asset('assets_admin/css/feathericon.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets_admin/plugins/morris/morris.css')}}">	
         <!-- Select2 CSS -->
         <link rel="stylesheet" href="{{asset('assets_admin/plugins/select2/css/select2.min.css')}}">	
        <!-- Datatables CSS -->
        <link rel="stylesheet" href="{{asset('assets_admin/plugins/datatables/datatables.min.css')}}">	
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('assets_admin/css/style.css')}}">
        <!-- multiple image css -->
        <link rel="stylesheet" href="{{asset('assets_admin/css/Jquery-ui-min.css')}}">
        <link rel="stylesheet" href="{{asset('assets_admin/css/image-uploader.min.css')}}">
       

        
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">

        @toastr_css