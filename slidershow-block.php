<!-- slidershow-block -->
<div id="header" class="slidershow-block">
	<div id="header_slide" class="header-items owl-carousel owl-theme">
		<!-- start of item 1 -->
		<div class="header-item img-bg-1">
			<div class="header-slider-content">
				<div class="center-header-slider-content">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-edit hidden-xs hidden-sm">
								<div class="slider-1-img">
									<img class="img-responsive img-1" src="assets/img/laptop.png" />
									<img class="img-responsive img-2" src="assets/img/desk.jpg" />
								</div>
							</div>
							<div class="col-md-6 col-edit">
								<div class="slider-content slider-move-1">
									<h2>Lorem ipsum dolor</h2>
									<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
									<a href="#">Buy now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end of item 1 -->

		<!-- start of item 2 -->
		<div class="header-item img-bg-2">
			<div class="header-slider-content">
				<div class="center-header-slider-content">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<div class="slider-content slider-move-2">
									<h2>Lorem ipsum dolor amet consectetur</h2>
									<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
									<a href="#">Buy now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end of item 2 -->

		<!-- start of item 3 -->
		<div class="header-item img-bg-2">
			<div class="header-slider-content">
				<div class="center-header-slider-content">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<div class="slider-content slider-move-3">
									<h2>Lorem ipsum dolor amet consectetur</h2>
									<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
									<a href="#">Buy now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end of item 3 -->
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$("#header_slide").owlCarousel({
			itemsCustom: [
				[0, 1]
			],
			navigation: false,
			slideSpeed: 300,
			paginationSpeed: 400,
			pagination: true,
			rewindSpeed: 500,
			autoPlay: true,
			afterAction: function(el) {
				//remove class active
				this
					.$owlItems
					.removeClass("active")
				//add class active
				this
					.$owlItems //owl internal $ object containing items
					.eq(this.currentItem)
					.addClass("active")
			}
		});
	});
</script>