<!-- jQuery -->
<script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
		
<script src="<?php echo e(asset('assets/js/slick.min.js')); ?>"></script>
		<!-- Bootstrap Core JS -->
		<script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
		<!-- Select2 JS -->
		<script src="<?php echo e(asset('assets/plugins/select2/js/select2.min.js')); ?>"></script>
		<!-- Datetimepicker JS -->
		<script src="<?php echo e(asset('assets/js/moment.min.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/js/bootstrap-datetimepicker.min.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
		<!-- Owl Carousel -->
		<script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>		
		<!-- Sticky Sidebar JS -->
        <script src="<?php echo e(asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')); ?>"></script>
		<!-- Circle Progress JS -->
		<!-- <script src="assets/js/circle-progress.min.js"></script> -->
		<!-- Custom JS -->
		<script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
		<?php if(Route::is(['map-grid','map-list'])): ?>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6adZVdzTvBpE2yBRK8cDfsss8QXChK0I"></script>
		<script src="<?php echo e(asset('assets/js/map.js')); ?>"></script>
		<?php endif; ?>

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
		</script><?php /**PATH C:\wamp64\www\dosiz\resources\views/layout/partials/footer-scripts.blade.php ENDPATH**/ ?>