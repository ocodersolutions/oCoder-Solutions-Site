<!-- portfolio-block -->
<div class="portfolio-block">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center">
				<h2 class="tittle">Portfolio</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="menu">
					<ul class="wrap">
						<li class="menuitem active" data-filter="all">all</li>
						<li class="menuitem" data-filter="1">graphic design</li>
						<li class="menuitem" data-filter="2">ui/ux design</li>
						<li class="menuitem" data-filter="3">web development</li>
						<li class="menuitem" data-filter="4">wordpress development</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row filtr-container box">
			<div class="col-md-4 col-sm-6 col-xs-12 filtr-item boxitem" data-category="1, 2">
				<div class="dh-container">
					<img class="img-responsive" src="assets/img/portfolio-block-01.jpg" />
					<div class="dh-overlay">
						<div class="dh-child">
							<button class="detail"><i class="fa fa-link"></i></button>
							<a class="image"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 filtr-item boxitem" data-category="3, 4">
				<div class="dh-container">
					<img class="img-responsive" src="assets/img/portfolio-block-02.jpg" />
					<div class="dh-overlay">
						<div class="dh-child">
							<button class="detail"><i class="fa fa-link"></i></button>
							<a class="image"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 filtr-item boxitem" data-category="1, 3">
				<div class="dh-container">
					<img class="img-responsive" src="assets/img/portfolio-block-03.jpg" />
					<div class="dh-overlay">
						<div class="dh-child">
							<button class="detail"><i class="fa fa-link"></i></button>
							<a class="image"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 filtr-item boxitem" data-category="2, 4">
				<div class="dh-container">
					<img class="img-responsive" src="assets/img/portfolio-block-04.jpg" />
					<div class="dh-overlay">
						<div class="dh-child">
							<button class="detail"><i class="fa fa-link"></i></button>
							<a class="image"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 filtr-item boxitem" data-category="1, 4">
				<div class="dh-container">
					<img class="img-responsive" src="assets/img/portfolio-block-05.jpg" />
					<div class="dh-overlay">
						<div class="dh-child">
							<button class="detail"><i class="fa fa-link"></i></button>
							<a class="image"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 filtr-item boxitem" data-category="2, 3">
				<div class="dh-container">
					<img class="img-responsive" src="assets/img/portfolio-block-06.jpg" />
					<div class="dh-overlay">
						<div class="dh-child">
							<button class="detail"><i class="fa fa-link"></i></button>
							<a class="image"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 filtr-item boxitem" data-category="3, 4">
				<div class="dh-container">
					<img class="img-responsive" src="assets/img/portfolio-block-03.jpg" />
					<div class="dh-overlay">
						<div class="dh-child">
							<button class="detail"><i class="fa fa-link"></i></button>
							<a class="image"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 filtr-item boxitem" data-category="1, 4">
				<div class="dh-container">
					<img class="img-responsive" src="assets/img/portfolio-block-04.jpg" />
					<div class="dh-overlay">
						<div class="dh-child">
							<button class="detail"><i class="fa fa-link"></i></button>
							<a class="image"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 filtr-item boxitem" data-category="1, 3">
				<div class="dh-container">
					<img class="img-responsive" src="assets/img/portfolio-block-05.jpg" />
					<div class="dh-overlay">
						<div class="dh-child">
							<button class="detail"><i class="fa fa-link"></i></button>
							<a class="image"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 filtr-item boxitem" data-category="1, 3">
				<div class="dh-container">
					<img class="img-responsive" src="assets/img/portfolio-block-06.jpg" />
					<div class="dh-overlay">
						<div class="dh-child">
							<button class="detail"><i class="fa fa-link"></i></button>
							<a class="image"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div></div>
		<div class="row"></div>
	</div>
</div>
<script src="assets/js/jquery.filterizr.min.js"></script>
<script src="assets/js/jquery.directional-hover.min.js"></script>
<script>
	function portfolio_block_menu_change(obj) {
		alert(obj.innerHTML);
	}
	window.onload = function() {
		$('.filtr-container').filterizr({
			layout: "sameSize"
		});

		$('.dh-container').directionalHover({
			speed: 350
		});

		var allmenuitem = document.querySelectorAll(".portfolio-block .menu .menuitem");
		for(var i=0; i < allmenuitem.length; i++) {
			allmenuitem[i].addEventListener("click", portfolio_block_menu_change);
		}
	};
</script>