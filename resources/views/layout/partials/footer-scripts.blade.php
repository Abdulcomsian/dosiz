<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>
		
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Select2 JS -->
		<script src="assets/plugins/select2/js/select2.min.js"></script>
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
		<!-- Owl Carousel -->
		<script src="assets/js/owl.carousel.min.js"></script>		
		<!-- Sticky Sidebar JS -->
        <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
		<!-- Circle Progress JS -->
		<!-- <script src="assets/js/circle-progress.min.js"></script> -->
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		@if(Route::is(['map-grid','map-list']))
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6adZVdzTvBpE2yBRK8cDfsss8QXChK0I"></script>
		<script src="assets/js/map.js"></script>
		@endif

		<script>
				$('.brandSlider').slick({
				infinite: true,
				slidesToShow: 5,
				slidesToScroll: 1,
				rtl: true,
				arrows: true,
				responsive: [
						{
						breakpoint: 1200,
						settings: {
							slidesToShow: 4,
							slidesToScroll: 1,
						}
						},
						{
						breakpoint: 768,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 1
						}
						},
						{
						breakpoint: 480,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
						}
						// You can unslick at a given breakpoint now by adding:
						// settings: "unslick"
						// instead of a settings object
					]
			});
			$('.productSlider').slick({
				infinite: true,
				slidesToShow: 4,
				slidesToScroll: 1,
				rtl: true,
				arrows: true,
				responsive: [
						{
						breakpoint: 992,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 1,
						}
						},
						{
						breakpoint: 768,
						settings: {
							slidesToShow: 5,
							slidesToScroll: 1
						}
						},
						{
						breakpoint: 480,
						settings: {
							slidesToShow: 4,
							slidesToScroll: 1
						}
						}
					]
			});
			$(".productSlider .sliderImg img").click(function(){
				console.log("here")
				var src=$(this).attr("src");
				$(".sliderDiv .mainImg img").attr("src", src)
			})
		</script>