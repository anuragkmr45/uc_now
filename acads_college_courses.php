<?php
include("adminpanel/conn.php");
error_reporting(0);
$conn=mysqli_connect("localhost","u808479902_uc","Uncover12","u808479902_uncovercampus");
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from academics");
$count=mysqli_num_rows($query);
include("header1.php");

?>

		<!--header end-->
		        	<!--== bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!--== animate -->
	<link href="css/animate.css" rel="stylesheet" type="text/css" />

	<!--== fontawesome -->
	<link href="css/fontawesome-all.css" rel="stylesheet" type="text/css" />

	<!--== line-awesome -->
	<link href="css/line-awesome.min.css" rel="stylesheet" type="text/css" />

	<!--== magnific-popup -->
	<link href="css/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

	<!--== owl-carousel -->
	<link href="css/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />

	<!--== base -->
	<link href="css/base.css" rel="stylesheet" type="text/css" />

	<!--== shortcodes -->
	<link href="css/shortcodes.css" rel="stylesheet" type="text/css" />

	<!--== default-theme -->
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/newstyle.css" rel="stylesheet" type="text/css" /> <!-- new style steet -->

	<!--== responsive -->
	<link href="css/responsive.css" rel="stylesheet" type="text/css" />
	
	<!--== responsive -->
	<link href="css-ac/main.css" rel="stylesheet" type="text/css" />

	<!--== color-customizer -->


		<!--hero section start-->
		

		<!--hero section end-->


		<!--body content start-->

		<div class="page-content">
			<!-- Topics Courses -->
	<section class="topics-section">
		<div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-1.png)"></div>
		<div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-2.png)"></div>
		<div class="auto-container">
			<div class="sec-title centered">
				<h2>Choose a topic</h2>
				<div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re, they’re two <br> waters own morning gathered greater shall had behold had seed.</div>
			</div>
			<div class="row clearfix">
				<?php
				while($result=mysqli_fetch_array($query)){
				?>
				<!-- Topic Block -->
				<div class="topic-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box image">
					    <a href="academics_cllg_courses.php?id=<?php echo $result['id']?>l" class="enroll">
    						<div class="icon-box">
    							<span class="icon flaticon-code"></span>
    						</div>
    						<h5><?php echo $result['course_name']?></h5>
    						<div class="text">Replenish him third creature and meat blessed</div>
    						<div class="clearfix">
    							<div class="pull-left">
    								<div class="lectures">All sem notes</div>
    							</div>
    							<div class="pull-right">
    							    Explore Now
    							</div>
    						</div>
						</a>
					</div>
				</div>
				<?php
				}
				?>
				
				
				<!-- Topic Block -->
				<!--<div class="topic-block col-lg-3 col-md-6 col-sm-12">-->
				<!--	<div class="inner-box">-->
				<!--		<div class="icon-box">-->
				<!--			<a href="course.html" class="overlay-link"></a>-->
				<!--			<span class="icon flaticon-shout"></span>-->
				<!--		</div>-->
				<!--		<h5><a href="course.html">Marketing</a></h5>-->
				<!--		<div class="text">Replenish him third creature and meat blessed</div>-->
				<!--		<div class="clearfix">-->
				<!--			<div class="pull-left">-->
				<!--				<div class="lectures">12 Lecturer</div>-->
				<!--			</div>-->
				<!--			<div class="pull-right">-->
				<!--				<div class="hours">54 Hours</div>-->
				<!--			</div>-->
				<!--		</div>-->
				<!--	</div>-->
				<!--</div>-->
				
			</div>
		
			<div class="btn-box text-center">
				<a href="academics.php" class="theme-btn btn-style-three"><span class="txt">See All Topics <i class="fa fa-angle-right"></i></span></a>
			</div>
			
		</div>
	</section>
	<!-- End Topics Courses -->
	
	<!-- Popular Courses -->
	<!--<section class="popular-courses-section">-->
	<!--	<div class="auto-container">-->
	<!--		<div class="sec-title centered">-->
	<!--			<h2>Popular Courses</h2>-->
	<!--			<div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re, <br> they’re two waters own morning gathered.</div>-->
	<!--		</div>-->
	<!--		<div class="row clearfix">-->
				
				<!-- Cource Block -->
	<!--			<div class="cource-block col-lg-4 col-md-6 col-sm-12">-->
	<!--				<div class="inner-box">-->
	<!--					<div class="image">-->
	<!--						<a href="course-detail.html"><img src="https://via.placeholder.com/370x253" alt="" /></a>-->
	<!--					</div>-->
	<!--					<div class="lower-content">-->
	<!--						<div class="clearfix">-->
	<!--							<div class="pull-left">-->
	<!--								<h5><a href="course-detail.html">Development Course</a></h5>-->
	<!--							</div>-->
	<!--							<div class="pull-right">-->
	<!--								<div class="price">$140</div>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--						<div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re, they’re two waters.</div>-->
	<!--						<div class="clearfix">-->
	<!--							<div class="pull-right">-->
	<!--								<a href="course-detail.html" class="enroll">Enroll Now</a>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
				
				<!-- Cource Block -->
	<!--			<div class="cource-block col-lg-4 col-md-6 col-sm-12">-->
	<!--				<div class="inner-box">-->
	<!--					<div class="image">-->
	<!--						<a href="course-detail.html"><img src="https://via.placeholder.com/370x253" alt="" /></a>-->
	<!--					</div>-->
	<!--					<div class="lower-content">-->
	<!--						<div class="clearfix">-->
	<!--							<div class="pull-left">-->
	<!--								<h5><a href="course-detail.html">Language Course</a></h5>-->
	<!--							</div>-->
	<!--							<div class="pull-right">-->
	<!--								<div class="price">$140</div>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--						<div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re, they’re two waters.</div>-->
	<!--						<div class="clearfix">-->
	<!--							<div class="pull-right">-->
	<!--								<a href="course-detail.html" class="enroll">Enroll Now</a>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
				
				<!-- Cource Block -->
	<!--			<div class="cource-block col-lg-4 col-md-6 col-sm-12">-->
	<!--				<div class="inner-box">-->
	<!--					<div class="image">-->
	<!--						<a href="course-detail.html"><img src="https://via.placeholder.com/370x253" alt="" /></a>-->
	<!--					</div>-->
	<!--					<div class="lower-content">-->
	<!--						<div class="clearfix">-->
	<!--							<div class="pull-left">-->
	<!--								<h5><a href="course-detail.html">Business Course</a></h5>-->
	<!--							</div>-->
	<!--							<div class="pull-right">-->
	<!--								<div class="price">$140</div>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--						<div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re, they’re two waters.</div>-->
	<!--						<div class="clearfix">-->
	<!--							<div class="pull-right">-->
	<!--								<a href="course-detail.html" class="enroll">Explore Now</a>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
				
	<!--		</div>-->
	<!--	</div>-->
	<!--</section>-->
	<!-- End Popular Courses -->
	
	<!-- Call To Action Section Two -->
	<section class="call-to-action-section-two" style="background-color:#03D665;">
		<div class="auto-container">
			<div class="content">
				<h2>Ready to get started?</h2>
				<div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re, they’re two <br> waters own morning gathered greater shall had behold had seed.</div>
				<div class="buttons-box">
					<a href="course.html" class="theme-btn btn-style-one"><span class="txt">Get Stared <i class="fa fa-angle-right"></i></span></a>
					<a href="course.html" class="theme-btn btn-style-two"><span class="txt">All Courses <i class="fa fa-angle-right"></i></span></a>
				</div>
			</div>
		</div>
	</section>
	<!--End pagewrapper-->

		

		</div>

		<!--body content end-->


		<!--footer start-->

		<script src="footer.js"></script>

		<!--footer end-->


	</div>


	<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="la la-hand-pointer-o"></i></a></div>

	<!--back-to-top end-->





    <!-- Global site tag (gtag.js) - Google Analytics START -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-979QL892R2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
    
        gtag('config', 'G-979QL892R2');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics END -->



	<!-- inject js start -->

	<!--== jquery -->
	<script src="js/common-theme.js"></script>

	<!--== nice-select -->
	<script src="js/jquery.nice-select.js"></script>

	<!--== owl-carousel -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

	<!--== magnific-popup -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

	<!--== counter -->
	<script src="js/counter/counter.js"></script>

	<!--== isotope -->
	<script src="js/isotope/isotope.pkgd.min.js"></script>

	<!--== particles -->
	<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

	<!--== vivus -->
	<script src="js/vivus/pathformer.js"></script>
	<script src="js/vivus/vivus.js"></script>

	<!--== raindrops -->
	<script src="js/raindrops/jquery-ui.js"></script>
	<script src="js/raindrops/raindrops.js"></script>

	<!--== countdown -->
	<script src="js/countdown/jquery.countdown.min.js"></script>

	<!--== contact-form -->
	<script src="js/contact-form/contact-form.js"></script>

	<!--== wow -->
	<script src="js/wow.min.js"></script>

	<!--== color-customize -->
	<script src="js/color-customize/color-customizer.js"></script>

	<!--== theme-script -->
	<script src="js/theme-script.js"></script>
	<!-- academics js inject start -->
	<script src="js-ac/jquery.js"></script>
	<script src="js-ac/popper.min.js"></script>
	<script src="js-ac/jquery.scrollTo.js"></script>
	<script src="js-ac/bootstrap.min.js"></script>
	<script src="js-ac/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js-ac/jquery.fancybox.js"></script>
	<script src="js-ac/appear.js"></script>
	<script src="js-ac/swiper.min.js"></script>
	<script src="js-ac/element-in-view.js"></script>
	<script src="js-ac/jquery.paroller.min.js"></script>
	<script src="js-ac/parallax.min.js"></script>
	<script src="js-ac/tilt.jquery.min.js"></script>
	<!--Master Slider-->
	<script src="js-ac/jquery.easing.min.js"></script>
	<script src="js-ac/owl.js"></script>
	<script src="js-ac/wow.js"></script>
	<script src="js-ac/jquery-ui.js"></script>
	<script src="js-ac/script.js"></script>

	<!-- inject js end -->



</body>


</html>