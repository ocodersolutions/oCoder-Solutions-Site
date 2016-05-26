<!-- menu-block -->
<nav id="topnav" class=" menu-block navbar">
		<div class="container">
            <div class="navbar-header">
                <!-- Logo Start -->
                <a class="navbar-brand" href="index.html">Ocorder</a>
                <!-- Logo End -->
            </div>
            <div id="topnavbar" class="navbar-collapse collapse ">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#header">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#testimonial">Testimoinal</a></li>
                    <li><a href="#pricingTable">Pricing</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><button class="mdl-button"><i class="fa fa-bars"></i></button></li>
                </ul>
            </div>
		</div>
	</nav>
	<script>
		$(document).ready(function() {
		var stickyNavTop = $('.menu-block').offset().top;
		var stickyNav = function(){
		var scrollTop = $(window).scrollTop();
		      
		if (scrollTop > stickyNavTop) { 
		    $('.menu-block').addClass('sticky');
		} else {
		    $('.menu-block').removeClass('sticky'); 
		}
		};
		 
		stickyNav();
		 
		$(window).scroll(function() {
		    stickyNav();
		});
		});
	</script>
	


