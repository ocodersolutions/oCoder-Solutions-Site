<!-- testimonial-block -->
<div id="testimonial" class="testimonial-block">
	<!-- start of head testemonial tabs -->
		<div class="uc_head_testemonial">
			<div class="uc_testemonial_wrap">
				<div class="uc_testemonial_content">
					<!-- start of carousel 1 block -->
				 	<div class="uc_owl_carousel" id="uc_carousel_testimonials">
	                    <!-- start of item 1 -->
	                    <div class="uc_item">
	                        <div class="uc_testemonial_slide">
	                        	<h3 class="uc_tester_tittle">Taylor McCartney</h3>
	                        	<div class="uc_tester_content">
	                        		<i class="fa fa-quote-left"></i>
	                        		<p class="uc_terter_say">
										Maecenas tristique gravida odio, et sagi ttis justo interdum porta. Duis et lacus mattis, tincidunt ero. Donec dictum non nulla ut tris tique gravida odio lobortis tristique gravida. Aliquam erat volutpat. Pellentesque auctor, arcu id tristique.
									</p>
									<i class="fa fa-quote-right"></i>
	                        	</div>
	                        </div>
	                    </div>
	                    <!-- end of item 1 -->

	                    <!-- start of item 2 -->
	                    <div class="uc_item">
	                        <div class="uc_testemonial_slide">
	                        	<h3 class="uc_tester_tittle">Taylor McCartney</h3>
	                        	<div class="uc_tester_content">
	                        		<i class="fa fa-quote-left"></i>
	                        		<p class="uc_terter_say">
										Maecenas tristique gravida odio, et sagi ttis justo interdum porta. Duis et lacus mattis, tincidunt ero. Donec dictum non nulla ut tris tique gravida odio lobortis tristique gravida. Aliquam erat volutpat. Pellentesque auctor, arcu id tristique.
									</p>
									<i class="fa fa-quote-right"></i>
	                        	</div>
	                        </div>
	                    </div>
	                    <!-- end of item 2 -->

	                    <!-- start of item 3 -->
	                    <div class="uc_item">
	                        <div class="uc_testemonial_slide">
	                        	<h3 class="uc_tester_tittle">Taylor McCartney</h3>
	                        	<div class="uc_tester_content">
	                        		<i class="fa fa-quote-left"></i>
	                        		<p class="uc_terter_say">
										Maecenas tristique gravida odio, et sagi ttis justo interdum porta. Duis et lacus mattis, tincidunt ero. Donec dictum non nulla ut tris tique gravida odio lobortis tristique gravida. Aliquam erat volutpat. Pellentesque auctor, arcu id tristique.
									</p>
									<i class="fa fa-quote-right"></i>
	                        	</div>
	                        </div>
	                    </div>
	                    <!-- end of item 3 -->

	                    <!-- start of item 4 -->
	                    <div class="uc_item">
	                        <div class="uc_testemonial_slide">
	                        	<h3 class="uc_tester_tittle">Taylor McCartney</h3>
	                        	<div class="uc_tester_content">
	                        		<i class="fa fa-quote-left"></i>
	                        		<p class="uc_terter_say">
										Maecenas tristique gravida odio, et sagi ttis justo interdum porta. Duis et lacus mattis, tincidunt ero. Donec dictum non nulla ut tris tique gravida odio lobortis tristique gravida. Aliquam erat volutpat. Pellentesque auctor, arcu id tristique.
									</p>
									<i class="fa fa-quote-right"></i>
	                        	</div>
	                        </div>
	                    </div>
	                    <!-- end of item 4 -->
					</div>
					<!-- end of carousel 1 block -->

					<!-- start of carousel 2 block -->
					<div class="uc_owl_carousel2" id="uc_carousel_testimonials2">
						<!-- start of avatar 1 -->
						<div class="uc_item">
							<div class="uc_images">
								<img src="assets/img/avatar_1.jpg" alt="" class="uc_avatar">
							</div>
							<div class="uc_tester_name">
								<h4 class="uc_testermonial_name">- Taylor -</h4>
								<span class="uc_testermonial_position">( Web Desinger )</span>
							</div>
						</div>
						<!-- end of avatar 1 -->

						<!-- start of avatar 2 -->
						<div class="uc_item">
							<div class="uc_images">
								<img src="assets/img/avatar_1.jpg" alt="" class="uc_avatar">
							</div>
							<div class="uc_tester_name">
								<h4 class="uc_testermonial_name">- Taylor -</h4>
								<span class="uc_testermonial_position">( Web Desinger )</span>
							</div>
						</div>
						<!-- end of avatar 2 -->

						<!-- start of avatar 3 -->
						<div class="uc_item">
							<div class="uc_images">
								<img src="assets/img/avatar_1.jpg" alt="" class="uc_avatar">
							</div>
							<div class="uc_tester_name">
								<h4 class="uc_testermonial_name">- Taylor -</h4>
								<span class="uc_testermonial_position">( Web Desinger )</span>
							</div>
						</div>
						<!-- end of avatar 3 -->

						<!-- start of avatar 4 -->
						<div class="uc_item">
							<div class="uc_images">
								<img src="assets/img/avatar_1.jpg" alt="" class="uc_avatar">
							</div>
							<div class="uc_tester_name">
								<h4 class="uc_testermonial_name">- Taylor -</h4>
								<span class="uc_testermonial_position">( Web Desinger )</span>
							</div>
						</div>
						<!-- end of avatar 4 -->
					</div>
					<!-- end of carousel 2 block -->
				</div>
			</div>
		</div>
	<!-- end of head testemonial tabs -->
</div>
<script type="text/javascript">
    $(document).ready(function(){
    	var sync1 = $("#uc_carousel_testimonials");
			var sync2 = $("#uc_carousel_testimonials2");
       $('#uc_carousel_testimonials').owlCarousel({
          itemsCustom : [
            [0, 1],
            [1600, 1]
          ],
          navigation : false,
          pagination: false,
          afterAction : syncPosition,
		  responsiveRefreshRate : 100,
		  slideSpeed : 1000,
	    
      });
        $('#uc_carousel_testimonials2').owlCarousel({
        	margin: 10,
        	items : 3,
		    itemsDesktop      : [1199,3],
		    itemsDesktopSmall     : [979,3],
		    itemsTablet       : [768,3],
		    itemsMobile       : [479,2],
		    pagination:false,
		    responsiveRefreshRate : 100,
		    afterInit : function(el){
		      el.find(".owl-item").eq(0).addClass("synced");
	    }
      });
        function syncPosition(el){
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

		}
    });
</script>