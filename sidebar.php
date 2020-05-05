<div class="col-md-4 about-wthree-grids">
					<div class="offic-time">
						<div class="time-top">
							<h4>Our Services</h4>
						</div>
						<div class="time-bottom">
							<a href="wedding.php"><h5> Wedding </h5></a>
							<a href="birthday.php"><h5> Birthday Party </h5></a>
							<a href="anniversary.php"><h5> Anniversary </h5></a>
							<a href="other_events.php"><h5> Other Events </h5></a>
						</div>
					</div><br />
					<div class="testi">
						<h3 class="w3ls-title1">Testimo<span>nial</span></h3>
						<!--//End-slider-script -->
						<script src="js/responsiveslides.min.js"></script>
						 <script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 5
							  $("#slider5").responsiveSlides({
								auto: true,
								pager: false,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						  </script>
						<div  id="top" class="callbacks_container">
							<ul class="rslides" id="slider5">
								<li>
									<div class="testi-slider">
										<h4>" I AM SATISFIED.</h4>
										<p>I am satisfied with event organizere's work. Best work and as per our budget.</p>
										<div class="testi-subscript">
											<p><a href="#">Jammy,</a>Patel</p>
											<span class="w3-agilesub"> </span>
										</div>	
									</div>
								</li>
								<li>
									<div class="testi-slider">
										<h4>" I AM VERY THANKFUL.</h4>
										<p>I am very thankful to Classic Events. It's work is prefect and beautiful. </p>
										<div class="testi-subscript">
											<p><a href="#">Shruja,</a>Patel</p>
											<span class="w3-agilesub"> </span>
										</div>	
									</div>
								</li>
							</ul>	
						</div>
					</div>