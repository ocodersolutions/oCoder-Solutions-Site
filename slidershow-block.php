<!-- slidershow-block -->
<div class="slidershow-block">
	<div class="header-items owl-carousel owl-theme" id="slideshowHeader">
        <!--item 1-->
        <div class="slider_item">
            <div class="slider_details">
                <div class="slider_image">
                    <div>
                        <img alt="client" class="img-responsive" src="assets/img/header-slider-1.jpg"/>
                    </div>
                    <!-- Header Slider Content Start -->
	                <div class="header-slider-content">
	                    <div class="center-header-slider-content">
	                        <div class="container">
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <!-- Slider Image Start -->
	                                    <div class="slider-1-img">

	                                        <img src="assets/img/laptop.png" alt="" class="img-responsive img-1">
	                                        <img src="assets/img/desk.jpg" alt="" class="img-responsive img-2">
	                                    </div>
	                                    <!-- Slider Image End -->
	                                </div>
	                                <div class="col-md-6 slider-1-content-c">
	                                    <!-- Slider Content Start -->
	                                    <div class="slider-1-content">
	                                        <h2 class="mdl-typography--display-2 mdl-typography--text-capitalize">lorem ipsum dolor</h2>
	                                        <h4 class="mdl-typography--text-capitalize">lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
	                                        <a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">buy now</a>
	                                    </div>
	                                    <!-- Slider Content End -->
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- Header Slider Content End -->
                </div>
               
            </div>
        </div>
        <!-- end item 1-->
        <!--item 1-->
        <div class="slider_item">
            <div class="slider_details">
                <div class="slider_image">
                    <div>
                        <img alt="client" class="img-responsive" src="assets/img/header-slider-2.jpg"/>
                    </div>
                    <!-- Header Slider Content Start -->
                <div class="header-slider-content">
                    <div class="center-header-slider-content">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-6 slider-1-content-c">
                                    <!-- Slider Content Start -->
                                    <div class="slider-1-content">
                                        <h2 class="mdl-typography--display-2 mdl-typography--text-capitalize">lorem ipsum dolor</h2>
                                        <h4 class="mdl-typography--text-capitalize">lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
                                        <a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">buy now</a>
                                    </div>
                                    <!-- Slider Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Slider Content End -->
                </div>
               
            </div>
        </div>
        <!-- end item 1-->
        <!--item 1-->
        <div class="slider_item">
            <div class="slider_details">
                <div class="slider_image">
                    <div>
                        <img alt="client" class="img-responsive" src="assets/img/header-slider-1.jpg"/>
                    </div>
                </div>
               
            </div>
        </div>
        <!-- end item 1-->
        
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
       $('#slideshowHeader').owlCarousel({
          itemsCustom : [
            [0, 1],
            [1600, 1]
          ],
           afterAction: function(el){
               //remove class active
               this
               .$owlItems
               .removeClass('active')
              
               //add class active
               this
               .$owlItems //owl internal $ object containing items
               .eq(this.currentItem)
               .addClass('active')
              
             },
          navigation : false, 
          slideSpeed : 300,
          paginationSpeed : 400,
          pagination: true,
          rewindSpeed: 500,
          autoPlay : true
      });
    });
</script>