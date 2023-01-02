<?php
include("adminpanel/conn.php");
include("header1.php");
$college_id=$_GET['id'];
$college_details=mysqli_query($conn,"select * from college where id='$college_id'");						
$result_info=mysqli_fetch_array($college_details);

$query_camp=mysqli_query($conn,"select * from campus_explorer");						
$count_camp=mysqli_num_rows($query_camp);


       $college_name=$result_info['college_name'];

       $query="select * from  collegerank where college_name='$college_name'";
       $data=mysqli_query($conn,$query);
       $count = mysqli_num_rows($data);
       
       
       $query="select * from  collegerank where college_name='$Faculty'";
       $data=mysqli_query($conn,$query);
       $count = mysqli_num_rows($data);
       
       
       $pquery="select * from placement where college_name='$college_name'";
       $pdata=mysqli_query($conn,$pquery);
       $pcount = mysqli_num_rows($pdata);
	   
	   
	   $fquery="select * from collegefaqs where college_name='$college_name'";
       $fdata=mysqli_query($conn,$fquery);
       $fcount = mysqli_num_rows($fdata);

       $cquery="select * from college where college_name='$college_name'";
       $cdata=mysqli_query($conn,$cquery);						
      $ccount=mysqli_fetch_array($cdata);
	      
	   
//$result1=mysqli_fetch_array($data); 
//$college_ranks=mysqli_query($conn,"SELECT * FROM collegerank where college_name='$college_name'" );


//$count=mysqli_num_rows($college_ranks);

?>
	
	
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
	
	
	<!-- Intro Courses -->
	<section class="intro-section">
		<div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-1.png)"></div>
		<div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-2.png)"></div>
		<div class="circle-one"></div>
		<div class="auto-container">
			<div class="sec-title">
				<h2><?php echo$result_info['college_name'];?> </h2>
			</div>
			
			<div class="inner-container">
				<div class="row clearfix">
					
					<!-- Content Column -->
					
					<div class="content-column col-lg-8 col-md-12 col-sm-12">
						<div class="inner-column">
							
							<!-- Intro Info Tabs-->
							<div class="intro-info-tabs">
								<!-- Intro Tabs-->
								<div class="intro-tabs tabs-box">
								
								
									
									<!--Tabs Container-->
									<div class="tabs-content">
										
										<!--Tab / Active Tab-->
										<div class="tab active-tab" id="prod-overview">
											<div class="content">
												
												<!-- Cource Overview -->
												<div class="course-overview">
													<div class="inner-box">
														<!--<h4>25 That Prevent Job Seekers From Overcoming Failure</h4>-->
														<p><?php echo$result_info['description'];?></p>
														<ul class="student-list">
															<!--<li>23,564 Total Students</li>-->
															<!--<li>23,564 Total faculty</li>-->
															<!--<li><span class="theme_color">4.5</span> <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span> (1254 Rating)</li>-->
															<!--<li>256 Reviews</li>-->
														</ul>
														<h3>Location :: </h3>
														<ul class="review-list">
															<li><?php echo$result_info['location'];?></li>
															<li><b>Nearest metro station :</b> <?php echo$result_info['metro_station'];?></li>
														</ul>
														
														<h3>Courses  :: </h3>
														<ul class="review-list">
															<li><?php echo$result_info['course_1'];?></li>
															<li><?php echo$result_info['course_2'];?></li>
															<li><?php echo$result_info['course_3'];?></li>
															<li><?php echo$result_info['course_4'];?></li>
															<li><?php echo$result_info['course_5'];?></li>
															<li><?php echo$result_info['course_6'];?></li>
															<li><?php echo$result_info['course_7'];?></li>
															<li><?php echo$result_info['course_8'];?></li>
														</ul>
														
														<h3>Documents Required :: </h3>
														<ul class="requirement-list">
															<li><?php echo$result_info['docs_1'];?></li>
															<li><?php echo$result_info['docs_2'];?></li>
															<li><?php echo$result_info['docs_3'];?></li>
															<li><?php echo$result_info['docs_4'];?></li>
															<li><?php echo$result_info['docs_5'];?></li>
															<!--<li><?php echo$result_info['docs_6'];?></li>-->
															<!--<li><?php echo$result_info['docs_7'];?></li>-->
														</ul>
														
														<h3>Societies ::  </h3>
														<ul class="requirement-list">
															<li><?php echo$result_info['society_1'];?></li>
															<li><?php echo$result_info['society_2'];?></li>
															<li><?php echo$result_info['society_3'];?></li>
															<li><?php echo$result_info['society_4'];?></li>
															<li><?php echo$result_info['society_5'];?></li>
															<li><?php echo$result_info['society_6'];?></li>
														</ul>
														<!--<h3>Instructors</h3>-->
														
														<!--<div class="row clearfix">-->
															
															<!-- Student Block -->
														<!--	<div class="student-block col-lg-6 col-md-6 col-sm-12">-->
														<!--		<div class="block-inner">-->
														<!--			<div class="image">-->
														<!--				<img src="https://via.placeholder.com/278x319" alt="" />-->
														<!--			</div>-->
														<!--			<h2>Stephane Smith</h2>-->
														<!--			<div class="text">Certified instructor Architecture& Developer</div>-->
														<!--			<div class="social-box">-->
														<!--				<a href="#" class="fa fa-facebook-square"></a>-->
														<!--				<a href="#" class="fa fa-twitter-square"></a>-->
														<!--				<a href="#" class="fa fa-linkedin-square"></a>-->
														<!--				<a href="#" class="fa fa-github"></a>-->
														<!--			</div>-->
														<!--			<a href="#" class="more">Know More <span class="fa fa-angle-right"></span></a>-->
														<!--		</div>-->
														<!--	</div>-->
															
															<!-- Student Block -->
														<!--	<div class="student-block col-lg-6 col-md-6 col-sm-12">-->
														<!--		<div class="block-inner">-->
														<!--			<div class="image">-->
														<!--				<img src="https://via.placeholder.com/278x319" alt="" />-->
														<!--			</div>-->
														<!--			<h2>Marvin Zona</h2>-->
														<!--			<div class="text">Certified instructor Architecture& Developer</div>-->
														<!--			<a href="#" class="more">Know More <span class="fa fa-angle-right"></span></a>-->
														<!--		</div>-->
														<!--	</div>-->
															
														<!--</div>-->
														
													</div>
												</div>
												
											</div>
										</div>
										
									
										

										
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<!-- Video Column -->
					<div class="video-column col-lg-4 col-md-12 col-sm-12">
						<div class="inner-column sticky-top">
								 <!--Video Box -->
								 
								 <img style="height:200px;" src="adminpanel/product_img/college_finder/<?php echo $result_info['college_img'] ?>" ?>
								 
								 <!--End Video Box -->
							<div class="price" style="padding-bottom: 60px;">Explore Campus</div>
								

							<a href="campus_search2.php" class="theme-btn btn-style-three"><span class="txt">Explore Now <i class="fa fa-angle-right"></i></span></a>
							<a href="contact.php" class="theme-btn btn-style-two"><span class="txt">Contact Us <i class="fa fa-angle-right"></i></span></a>
						</div>
					</div>

					
				</div>
			</div>
		
		</div>
	</section>
	<!-- End intro Courses -->
	
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