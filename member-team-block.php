<!-- member-team-block -->
<div class="member-team-block">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3"> <div class="section-title text-center"> <h2 class="tittle">who we are</h2> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper</p></div></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="slider-member-content">
					
					<!-- start team-box-->
					<div class="teambox">
						<div class="member-box mdl-shadow--2dp">
							<div class="member-card__title-text">
								<img src="assets/img/team-member-4.png" alt="">
							</div>
							<div class="member-card__supporting-text">
								 <h2>Mohammad Al Omayer</h2> <h4>Web Designer &amp; Developer</h4> 
							</div>
							<div class="member-card__menu">
								<button class="mdl-button mem-button--icon">
									<i>...</i>
									<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
								</button>
							</div>
						</div>
					</div>
					<!-- end team-box-->
					<!-- start team-box-->
					<div class="teambox">
						<div class="member-box mdl-shadow--2dp">
							<div class="member-card__title-text">
								<img src="assets/img/team-member-4.png" alt="">
							</div>
							<div class="member-card__supporting-text">
								 <h2>Mohammad Al Omayer</h2> <h4>Web Designer &amp; Developer</h4> 
							</div>
							<div class="member-card__menu">
								<button class="mdl-button mem-button--icon">
									<i>...</i>
									<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
								</button>
							</div>
						</div>
					</div>
					<!-- end team-box-->
					<!-- start team-box-->
					<div class="teambox">
						<div class="member-box mdl-shadow--2dp">
							<div class="member-card__title-text">
								<img src="assets/img/team-member-4.png" alt="">
							</div>
							<div class="member-card__supporting-text">
								 <h2>Mohammad Al Omayer</h2> <h4>Web Designer &amp; Developer</h4> 
							</div>
							<div class="member-card__menu">
								<button class="mdl-button mem-button--icon">
									<i>...</i>
									<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
								</button>
							</div>
						</div>
					</div>
					<!-- end team-box-->
					<!-- start team-box-->
					<div class="teambox">
						<div class="member-box mdl-shadow--2dp">
							<div class="member-card__title-text">
								<img src="assets/img/team-member-4.png" alt="">
							</div>
							<div class="member-card__supporting-text">
								 <h2>Mohammad Al Omayer</h2> <h4>Web Designer &amp; Developer</h4> 
							</div>
							<div class="member-card__menu">
								<button class="mdl-button mem-button--icon">
									<i>...</i>
									<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
								</button>
							</div>
						</div>
					</div>
					<!-- end team-box-->
					<!-- start team-box-->
					<div class="teambox">
						<div class="member-box mdl-shadow--2dp">
							<div class="member-card__title-text">
								<img src="assets/img/team-member-4.png" alt="">
							</div>
							<div class="member-card__supporting-text">
								 <h2>Mohammad Al Omayer</h2> <h4>Web Designer &amp; Developer</h4> 
							</div>
							<div class="member-card__menu">
								<button class="mdl-button mem-button--icon">
									<i>...</i>
									<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
								</button>
							</div>
						</div>
					</div>
					<!-- end team-box-->
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
            $(document).ready(function(){
	            $('.slider-member-content').owlCarousel({
                  itemsCustom : [
                    [0, 4],
                    [1600, 1]
                  ],
				  navigation : false, 
			      slideSpeed : 300,
			      paginationSpeed : 400,
			      pagination: true,
	    		  rewindSpeed: 500,
				  autoPlay : true
			    
              });
                
                /*function syncPosition(el){
				var current = this.currentItem;
				$("#uc_carousel_testimonials2")
				  .find(".owl-item")
				  .removeClass("synced")
				  .eq(current)
				  .addClass("synced")
				if($("#uc_carousel_testimonials2").data("owlCarousel") !== undefined){
				  center(current)
				}
				}

				$("#uc_carousel_testimonials2").on("click", ".owl-item", function(e){
				e.preventDefault();
				var number = $(this).data("owlItem");
				sync1.trigger("owl.goTo",number);
				});

				function center(number){
				var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
				var num = number;
				var found = false;
				for(var i in sync2visible){
				  if(num === sync2visible[i]){
				    var found = true;
				  }
				}

				if(found===false){
				  if(num>sync2visible[sync2visible.length-1]){
				    sync2.trigger("owl.goTo", num - sync2visible.length+2)
				  }else{
				    if(num - 1 === -1){
				      num = 0;
				    }
				    sync2.trigger("owl.goTo", num);
				  }
				} else if(num === sync2visible[sync2visible.length-1]){
				  sync2.trigger("owl.goTo", sync2visible[1])
				} else if(num === sync2visible[0]){
				  sync2.trigger("owl.goTo", num-1)
				}

				}*/
            });
        </script>