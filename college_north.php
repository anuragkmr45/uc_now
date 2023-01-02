<?php
error_reporting(0);
$conn=mysqli_connect("localhost","u808479902_uc","Uncover12","u808479902_uncovercampus");
$query_college=mysqli_query($conn,"select * from college where campus='north'");
$query_tags=mysqli_query($conn,"select tags,id from exams");
$query_special=mysqli_query($conn,"select speciality,id from college");
$query_exams=mysqli_query($conn,"select * from exams");
$college_count=mysqli_num_rows($query_college); 
$row = mysqli_fetch_array($query_college);
include("header1.php");


?>

		<!--header end-->


		<!--hero section start-->
		

		<!--hero section end-->


		<!--body content start-->

	
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

<!--search baar -->
<link rel="stylesheet" href="css/searchBaar.css">

    <!--End Page Title-->
	
	
	
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class=" options-view">
			<div class="clearfix">
				<div class="">
					<h3 class="text-center">Explore North Campus Colleges</h3>
				</div>

			</div>
		</div>
        <div class="container" style="background-color: #fof5fb;">
  	<div class="col-md-12">
        <!--<h3 align="center">Search Your Colleges Here</h3>-->
        <div class="job-search">
            <div class="">
                <div class="">
                  <div class="form-group mb-0">
                      <input id="searchbar" onkeyup="search_animal()" type="text" name="search" placeholder="Search College by Name/ Location / Category...">
                  </div>
                </div>
            </div>
        </div>
    </div>
    </div>
		<div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-1.png)"></div>
		<div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-2.png)"></div>
		<div class="circle-one"></div>
		<div class="circle-two"></div>
    	<div class="auto-container">
        	<div class="row clearfix">
        	    
				
				<!-- Content Side -->
                <div class="content-side col-lg-9 col-md-12 col-sm-12 mt-5">
                	<div class="our-courses">
						
						<!-- Options View -->
						
						
						<div class="row clearfix">
							
							<?php
                                while ($result=mysqli_fetch_array($query_college)) {
                            ?>
							
							<!-- Cource Block Two -->
							<div class="cource-block-two col-lg-4 col-md-6 col-sm-12 animals">
								<div class="inner-box">
								    <a href="college_info.php?id=<?php echo $result['id']?> ">
    									<div class="image">
    										<img style="height: 20vh;" src="adminpanel/product_img/college_finder/<?php echo$result['college_img'] ?>" alt="" />
    									</div>
    									<div class="lower-content">
    										<h5><?php echo$result['college_name'];?></h5>
    										<div class="text"><?php echo$result['location'] ?></div>
    										<!--<div class="clearfix">-->
    										<!--	<div class="pull-left">-->
    										<!--		<div class="students">12 Lecturer</div>-->
    										<!--	</div>-->
    										<!--	<div class="pull-right">-->
    										<!--		<div class="hours">54 Hours</div>-->
    										<!--	</div>-->
    										<!--</div>-->
    									</div>
									</a>
								</div>
							</div>
							<?php
                            } 
                            ?>
							<!-- Cource Block Two -->
							<!--<div class="cource-block-two col-lg-4 col-md-6 col-sm-12">-->
							<!--	<div class="inner-box">-->
							<!--		<div class="image">-->
							<!--			<a href="course-detail.html"><img src="https://via.placeholder.com/270x150" alt="" /></a>-->
							<!--		</div>-->
							<!--		<div class="lower-content">-->
							<!--			<h5><a href="course-detail.html">Visual Design</a></h5>-->
							<!--			<div class="text">Replenish of  third creature and meat blessed void a fruit gathered waters.</div>-->
							<!--			<div class="clearfix">-->
							<!--				<div class="pull-left">-->
							<!--					<div class="students">12 Lecturer</div>-->
							<!--				</div>-->
							<!--				<div class="pull-right">-->
							<!--					<div class="hours">54 Hours</div>-->
							<!--				</div>-->
							<!--			</div>-->
							<!--		</div>-->
							<!--	</div>-->
							<!--</div>-->
							
						</div>
						
					</div>
					
				</div>
				
				<!-- Sidebar Side -->
                <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
					<div class="sidebar-inner">
						<aside class="sidebar">
							
							<!-- Filter Widget -->
							<div class="filter-widget">
								<h5>Filter By</h5>
								
								<div class="skills-box">
									
									<!-- Skills Form -->
									<div class="skills-form">
										<form method="post" action="index.html">
											<span>Skill Level</span>
											
											<!-- Radio Box -->
											<div class="radio-box">
												<input type="radio" name="remember-password" checked id="type-1"> 
												<label for="type-1">Beginner</label>
											</div>
											
											<!-- Radio Box -->
											<div class="radio-box">
												<input type="radio" name="remember-password" id="type-2"> 
												<label for="type-2">Intermediate</label>
											</div>
											
											<!-- Radio Box -->
											<div class="radio-box">
												<input type="radio" name="remember-password" id="type-3"> 
												<label for="type-3">Expert</label>
											</div>
											
										</form>
									</div>
									
								</div>
								
								<div class="skills-box-two">
									
									<!-- Skills Form -->
									<div class="skills-form-two">
										<form method="post" action="index.html">
											<span>Skill Level</span>
											
											<!-- Radio Box -->
											<div class="radio-box">
												<input type="radio" name="remember-password" checked id="type-4"> 
												<label for="type-4">Free (14)</label>
											</div>
											
											<!-- Radio Box -->
											<div class="radio-box">
												<input type="radio" name="remember-password" id="type-5"> 
												<label for="type-5">Paid</label>
											</div>
											
										</form>
									</div>
									
								</div>
								
								<div class="skills-box-three">
									
									<!-- Skills Form -->
									<div class="skills-form-three">
										<form method="post" action="index.html">
											<span>Duration Time</span>
											
											<!-- Radio Box -->
											<div class="radio-box-three">
												<input type="radio" name="remember-password" checked id="type-7">
												<label for="type-7">5+ hours (30)</label>
											</div>
											
											<!-- Radio Box -->
											<div class="radio-box-three">
												<input type="radio" name="remember-password" id="type-8"> 
												<label for="type-8">10+ hours (20)</label>
											</div>
											
											<!-- Radio Box -->
											<div class="radio-box-three">
												<input type="radio" name="remember-password" id="type-9"> 
												<label for="type-9">15+ hours (5)</label>
											</div>
											
										</form>
									</div>
									
								</div>
								
							</div>
							
						</aside>
					</div>
				</div>
				
			</div>
			
			<!-- Post Share Options -->
			<!--<div class="styled-pagination">-->
			<!--	<ul class="clearfix">-->
			<!--		<li class="prev"><a href="#"><span class="fa fa-angle-left"></span> </a></li>-->
			<!--		<li><a href="#">1</a></li>-->
			<!--		<li><a href="#">2</a></li>-->
			<!--		<li class="active"><a href="#">3</a></li>-->
			<!--		<li><a href="#">4</a></li>-->
			<!--		<li><a href="#">5</a></li>-->
			<!--		<li class="next"><a href="#"><span class="fa fa-angle-right"></span> </a></li>-->
			<!--	</ul>-->
			<!--</div>-->
			
		</div>
	</div>
	
	<!-- Popular Courses -->
	<section class="pb-0 z-index-1">
  <div class="round-anim center"></div>
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-10 ml-auto mr-auto">
        <div class="section-title">
          <h2 class="title">Enhance your <span>experience</span></h2>
          <!--<div class="title-bdr">-->
          <!--  <div class="left-bdr"></div>-->
          <!--  <div class="right-bdr"></div>-->
          <!--</div>-->
          <p>Enhance your experience just by registering with us.In few simple steps so we can provide you with you bestest consultation.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
                  <a href="register.php">
        <div class="box-shadow white-bg px-5 py-5 xs-px-1 xs=py-1 radius-lb radius-rt">
          <div class="row text-center">
            <div class="col-lg-4 col-md-12">
              <div class="featured-item">
                <div class="featured-icon">
                  <img src="images/customer.png" style="height:100px; width:100px">
                </div>
                <div class="featured-title">
                  <h5>Register with us.</h5>
                </div>
                <div class="featured-desc">
                  <p>Register with us so we can provide you Recommendation according to your needs.</p>
                </div>
              </div>
                </a>
            </div>
                  <a href="register.php">
            <div class="col-lg-4 col-md-12 md-mt-5">
              <div class="featured-item">
                <div class="featured-icon">
                   <img src="images/form.png" style="height:80px; width:80px">
                </div>
                <div class="featured-title">
                  <h5>Fill Form</h5>
                </div>
                <div class="featured-desc">
                  <p>By filling a basic form we will know what you want and display data according to your requirements.</p>
                </div>
              </div>
                </a>
            </div>
                  <a href="login.php">
            <div class="col-lg-4 col-md-12 md-mt-5">
              <div class="featured-item">
                <div class="featured-icon">
                   <img src="images/login.png" style="height:80px; width:80px">
                </div>
                <div class="featured-title">
                  <h5>Login</h5>
                </div>
                <div class="featured-desc">
                  <p>By doing so you can get some recommendations not only about colleges but also about events happening near your college and lot more. </p>
                </div>
              </div>
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	<!-- End Popular Courses -->
	
	
		<!--body content end-->


		<!--footer start-->

		<script src="footer.js"></script>

		<!--footer end-->


	</div>


	<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="la la-hand-pointer-o"></i></a></div>

	<!--back-to-top end-->





    <!-- Global site tag (gtag.js) - Google Analytics START -->
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-979QL892R2"></script>-->
    <!--<script>-->
    <!--    window.dataLayer = window.dataLayer || [];-->
    <!--    function gtag(){dataLayer.push(arguments);}-->
    <!--    gtag('js', new Date());-->
    
    <!--    gtag('config', 'G-979QL892R2');-->
    <!--</script>-->

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
	
    <!--== search baar -->
    <script src="js/searchBaar.js"></script>

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