<!-- partnerslide-block -->
<div class="partnerslide-block">
	<div class="container">
		<div id="brand" class="text-center owl-carousel">
			<div><img src="assets/img/brand-1.png" /></div>
			<div><img src="assets/img/brand-2.png" /></div>
			<div><img src="assets/img/brand-3.png" /></div>
			<div><img src="assets/img/brand-4.png" /></div>
			<div><img src="assets/img/brand-1.png" /></div>
			<div><img src="assets/img/brand-2.png" /></div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$("#brand").owlCarousel({
			pagination: false,
			autoPlay: true,
			itemsCustom: [
				[0, 1],
				[480, 2],
				[768, 3],
				[992, 4]
			],
		});
	});
</script>