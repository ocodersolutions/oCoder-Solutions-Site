<!-- contact-block -->
<div class="contact-block">
	<div id="googleMap" style="overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);"></div>
	<div class="contact-window mdl-card mdl-shadow--24dp">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="section-title text-center">
                            <h2 class="tittle">contact us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Contact Address Start -->
                    <div class="col-md-3 contact-address">
                        <h2>Lorem Ipsum sit amut dolor</h2>
                        <address>
                            <p>1234 12th Avenue NW, East Shawarapara, Dhaka</p>
                        </address>
                        <address>
                            <p class="phone">
                                <i class="fa fa-phone"></i>Phone <span class="pull-right">(425) 392-2328</span>
                            </p>
                            <p class="fax"><i class="fa fa-fax"></i>Fax <span class="pull-right">(425) 392-2328</span></p>
                            <p class="email"><i class="fa fa-envelope"></i>E-mail <span class="pull-right">info@example.com</span></p>
                        </address>
                        <div class="social-links">
                            <p>Follow us on:</p>
                            <ul>
                                <li><a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple"><i class="fa fa-facebook"></i><span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a></li>
                                <li><a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple"><i class="fa fa-twitter"></i><span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a></li>
                                <li><a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple"><i class="fa fa-google-plus"></i><span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a></li>
                                <li><a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple"><i class="fa fa-linkedin"></i><span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Contact Address End -->
                    <div class="col-md-9 contact-form">
                        <div class="contact-form-status"></div>
                        <form action="#" method="post" id="contactFrom" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mdl-textfield mdl-js-textfield is-upgraded" data-upgraded=",MaterialTextfield">
                                        <input class="mdl-textfield__input" type="text" name="contactName" id="contactName">
                                        <label class="mdl-textfield__label" for="contactName">Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mdl-textfield mdl-js-textfield is-upgraded" data-upgraded=",MaterialTextfield">
                                        <input class="mdl-textfield__input" type="text" id="contactEmail" name="contactEmail">
                                        <label class="mdl-textfield__label" for="contactEmail">Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mdl-textfield mdl-js-textfield is-upgraded" data-upgraded=",MaterialTextfield">
                                        <textarea class="mdl-textfield__input" rows="4" name="contactMessage" id="contactMessage"></textarea>
                                        <label class="mdl-textfield__label" for="contactMessage">Message</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="Send" class="button-effecs ripple">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
<script>
	google.maps.event.addDomListener(window, "load", loadgooglemap);
			function loadgooglemap() {
				var coordinates = new google.maps.LatLng(16.4419381,107.5839138);
				var mapProp = {
					center: coordinates,
					zoom: 15,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
				var marker = new google.maps.Marker({
					position: coordinates
				});
				marker.setMap(map);
			}
</script>