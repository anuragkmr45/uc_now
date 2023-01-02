<?php
include("adminpanel/conn.php");
$id = $_GET['id'];
$query = mysqli_query($conn,"select * from academics where id ='$id' ");
$result = mysqli_fetch_array($query);
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
		<div class="page-wrapper">
		<!-- Intro Courses -->
		<section class="intro-section">
			
			<div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20"
				data-paroller-type="foreground" data-paroller-direction="vertical"
				style="background-image: url(images-ac/icons/icon-2.png)"></div>
			<div class="circle-one"></div>
			<div class="auto-container">
				<div class="sec-title">
					<h2><?php echo $result['course_name'] ?></h2>
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

										<!--Tab Btns-->
										<ul class="tab-btns tab-buttons clearfix">
											<li data-tab="#prod-overview" class="tab-btn active-btn">About</li>
											<li data-tab="#prod-reviews" class="tab-btn ">Syllabus</li>
											
											<li data-tab="#prod-announcement" class="tab-btn">Subject Notes</li>
											
										</ul>

										<!--Tabs Container-->
										<div class="tabs-content">

											<!--Tab / Active Tab-->
											<div class="tab active-tab" id="prod-overview">
												<div class="content">

													<!-- Cource Overview -->
													<div class="course-overview">
														<div class="inner-box">
															<h4>What is <?php echo $result['course_name'] ?> ? </h4>
															<p><?php echo $result['cour_desc'] ?></p>
															
															
															<div class="row clearfix">

																

																<!-- Student Block -->
															

															</div>

														</div>
													</div>

												</div>
											</div>
											<!-- Notes -->
											<div class="tab" id="prod-announcement">
												<div class="content">

													<!-- Accordion Box -->
													<ul class="accordion-box">

														<!-- Block -->
														<li class="accordion block">
															<div class="acc-btn active">
																<div class="icon-outer"><span></span>
																</div> Semester 1
															</div>
															<div class="acc-content current">
																<div class="content">
																	<div class="clearfix">
																		<div class="pull-left">
																			<a href="academics_pdf/<?php echo $result['material_sem1'] ?>" target="_blank">Download Semester 1 Notes</a>
																		</div>
																	</div>
																</div>
																
															</div>
														</li>

														<!-- Block -->
														<li class="accordion block">
															<div class="acc-btn">
																<div class="icon-outer"><span
																		></span>
																</div> Semester 2
															</div>
															<div class="acc-content">
																<div class="content">
																	<div class="clearfix">
																		<div class="pull-left">
																			<a href="academics_pdf/<?php echo $result['material_sem2'] ?>" target="_blank"></span>Download Semester 2 Notes</a>
																		</div>
																	</div>
																</div>
																
																
															</div>
														</li>
														<li class="accordion block">
															<div class="acc-btn">
																<div class="icon-outer"><span
																		></span>
																</div> Semester 3
															</div>
															<div class="acc-content">
																<div class="content">
																	<div class="clearfix">
																		<div class="pull-left">
																			<a href="academics_pdf/<?php echo $result['material_sem3'] ?>" target="_blank"></span>Download Semester 3 Notes</a>
																		</div>
																	</div>
																</div>
																
																
															</div>
														</li>
														<li class="accordion block">
															<div class="acc-btn">
																<div class="icon-outer"><span
																		></span>
																</div> Semester 4
															</div>
															<div class="acc-content">
																<div class="content">
																	<div class="clearfix">
																		<div class="pull-left">
																			<a href="academics_pdf/<?php echo $result['material_sem4'] ?>" target="_blank"></span>Download Semester 4 Notes</a>
																		</div>
																	</div>
																</div>
																
																
															</div>
														</li>
														<li class="accordion block">
															<div class="acc-btn">
																<div class="icon-outer"><span
																		></span>
																</div> Semester 5
															</div>
															<div class="acc-content">
																<div class="content">
																	<div class="clearfix">
																		<div class="pull-left">
																			<a href="academics_pdf/<?php echo $result['material_sem5'] ?>" target="_blank"></span>Download Semester 5 Notes</a>
																		</div>
																	</div>
																</div>
																
															</div>
														</li>
														<li class="accordion block">
															<div class="acc-btn">
																<div class="icon-outer"><span
																		></span>
																</div> Semester 6
															</div>
															<div class="acc-content">
																<div class="content">
																	<div class="clearfix">
																		<div class="pull-left">
																			<a href="academics_pdf/<?php echo $result['material_sem6'] ?>" target="_blank"></span>Download Semester 6 Notes</a>
																		</div>
																	</div>
																</div>
																
																
															</div>
														</li>

														
													</ul>

												</div>
											</div>

											
											<div class="tab" id="prod-reviews">
												<div class="content">

													<div class="cource-review-box">
														<h4>B.comm Syllabus</h4>
														<div class="student-block col-lg-6 col-md-6 col-sm-12">
																	<div class="block-inner">
																		<div class="image">
																			<img src="images/bcom.jpg" alt="" />
																		</div>
																		
																		<a href="academics_pdf/<?php echo $result['syllabus'] ?>" target="_blank" class="more">View Full Syllabus <span
																				class="fa fa-angle-right"></span></a>
																	</div>
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
						<div class="video-column col-lg-4 col-md-12 col-sm-12 my-auto">
							<div class="inner-column sticky-top">


								<div class="price" style="padding-bottom: 60px;">Explore More</div>
								

								<a href="college.php" class="theme-btn btn-style-three"><span class="txt">Explore Now <i
											class="fa fa-angle-right"></i></span></a>
								<a href="contact.php" class="theme-btn btn-style-two"><span class="txt">Contact Us <i
											class="fa fa-angle-right"></i></span></a>
							</div>
						</div>

					</div>
				</div>

			</div>
		</section>
		<!-- End intro Courses -->



	</div>
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