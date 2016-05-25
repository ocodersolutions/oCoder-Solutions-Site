<!-- subscribe-block -->
<div id="subscribeSection">
	<div id="subscribe" class="subscribe-block">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<h2>Subscribe</h2>
					<p>To Get Our Newsletter</p>

					<form class="frm-main" action="" method="get" accept-charset="utf-8">
						<div class="subscribe-frame">
							<input class="subscribe-input" type="text" id="subscribeFormInput" name="email">
							<label class="subscribe-text" for="subscribeFormInput">
							Subscribe
							</label>
						</div>
						
						<button type="submit" class="subscribe-buttom raised button-effecs ripple ">
							Subscribe
						</button>		
					</form>
				</div>
					
			</div>
		</div>
	</div>
	
</div>
<script type="text/javascript" charset="utf-8" async defer>
	$(document).ready(function(){

	
		$('.subscribe-input').focus(function(){
			$('.subscribe-text').animate({fontSize: "12px", marginTop: "-50px"},"fast");
		});

		$('.subscribe-input').focusout(function(){
			$('.subscribe-text').animate({fontSize: "16px", marginTop: "-25px"},"fast");
		});
				

	});
</script>