	<!-- banner -->
	<div class="banner"> 
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="banner-img1">
							<div class="banner-w3text">
								</div>
						</div>
					</li>
					<li>
						<div class="banner-img2">
							<div class="banner-w3text">
							</div>
						</div>
					</li>
					

				</ul> 
			</div>
		</section> 
		<!-- FlexSlider -->
		<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
			$(window).load(function(){
			  $('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
				  $('body').removeClass('loading');
				}
			  });
			});
		</script>
		<!-- //FlexSlider -->
	</div>
	<!-- banner -->
