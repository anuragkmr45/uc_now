<?php
include("adminpanel/conn.php");
$conn=mysqli_connect("localhost","u808479902_uc","Uncover12","u808479902_uncovercampus");
$query=mysqli_query($conn,"select * from blog where id='$_id'");
$result=mysqli_fetch_array($query);
$_id=$_GET['id'];
include("header1.php");

?>

		<!--header end-->
		
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

<style>
      .zoom {
    transition: transform .5s;
  }

  .zoom:hover {
    transform: scale(1.09);
    box-shadow: black;
  }
  .img-cont{
    overflow: hidden;
  }
</style>

		<!--hero section start-->
		

		<!--hero section end-->


		<!--body content start-->

		<!-- Page Title -->
		<section class="">
		    <!--<div class="round-anim center"></div>-->
            <div class="auto-container my-5">
    			<h1 class="text-center">Blogs</h1>
    			<p class="text-center">A place for inquisitive viewers to know about life of a delhi university students and about the integral colleges in university of delhi, the faculty, infrastructure, study, opportunities a students get to explore in their college phase.</p>
            </div>
    <!--End Page Title-->
	
	<!--Sidebar Page Container-->
        <div class="sidebar-page-container" style="padding-top:0 ;">
    		<div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-1.png)"></div>
    		<div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-2.png)"></div>
    		<div class="circle-one"></div>
    		<div class="circle-two"></div>
        	<div class="auto-container">
            	<div class="row clearfix">
    				
    				<!-- Content Side -->
                    <div class="content-side col-lg-9 col-md-12 col-sm-12">
                    	<div class="our-courses">
    						
    						<!-- Options View -->
    						<div class="options-view">
    							<div class="clearfix">
    								<div class="pull-left">
    									<h3>Featured Posts</h3>
    								</div>
    								<div class="pull-right clearfix">
    									<!-- List View -->
    									<ul class="list-view">
    										<li class="active"><a href="#"><span class="icon flaticon-grid"></span></a></li>
    										<li><a href="#"><span class="icon flaticon-list-1"></span></a></li>
    									</ul>
    									
    									<!-- Type Form -->
    									<div class="type-form">
    										<form method="post" action="index.html">
    											
    											<!-- Form Group -->
    											<div class="form-group">
    												<select class="custom-select-box">
    													<option>Newest</option>
    													<option>Old</option>
    												</select>
    											</div>
    											
    										</form>
    									</div>
    									
    								</div>
    							</div>
    						</div>
    						
    						<div class="row clearfix">
    						    <?php
                                $query=mysqli_query($conn,"select * from blog order by id desc");
                                while ($result=mysqli_fetch_array($query)) {
                                ?>
    							<!-- Cource Block Two -->
        							<div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
        								<div class="inner-box">
        								    <a href="blog_dtl.php?id=<?php echo $result['id']?>">
            									<div class="image">
            										<img style="height:200px;" src="adminpanel/product_img/blog_img/<?php echo$result['blog_img'] ?>" alt="" />
            									</div>
            									<div class="lower-content">
            										<h5><?php echo $result['heading']?></h5>
            										<!--<div class="text">And meat blessed void a fruit gathered waters.</div>-->
            										<div class="clearfix">
            											<div class="pull-left">
            												<div class="students"><?php echo$result['writter']?> </div>
            											</div>
            											<div class="pull-right">
            												<div class="hours"><?php echo$result['date_of_update']?></div>
            											</div>
            										</div>
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
    							<!--			<a href="blog-detail.html"><img src="https://via.placeholder.com/270x150" alt="" /></a>-->
    							<!--		</div>-->
    							<!--		<div class="lower-content">-->
    							<!--			<h5><a href="blog-detail.html">10 amazing web of demos Developers</a></h5>-->
    							<!--			<div class="text">And meat blessed void a fruit gathered waters.</div>-->
    							<!--			<div class="clearfix">-->
    							<!--				<div class="pull-left">-->
    							<!--					<div class="students">By David Smith</div>-->
    							<!--				</div>-->
    							<!--				<div class="pull-right">-->
    							<!--					<div class="hours">11 Jan 20</div>-->
    							<!--				</div>-->
    							<!--			</div>-->
    							<!--		</div>-->
    							<!--	</div>-->
    							<!--</div>-->
    							
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
    						<!--		<li><a href="#">6</a></li>-->
    						<!--		<li><a href="#">7</a></li>-->
    						<!--		<li><a href="#">8</a></li>-->
    						<!--		<li class="next"><a href="#"><span class="fa fa-angle-right"></span> </a></li>-->
    						<!--	</ul>-->
    						<!--</div>-->
    						
    					</div>
    					
    				</div>
    				
    				<!-- Sidebar Side -->
                    <div class="sidebar-side style-two col-lg-3 col-md-12 col-sm-12">
    					<div class="sidebar-inner sticky-top">
    						<aside class="sidebar ">
    							
    							<!-- Popular Posts -->
    							<div class="sidebar-widget popular-posts">
    							
    								<!-- Sidebar Title -->
    								<div class="sidebar-title">
    									<h5>Recent Posts</h5>
    								</div>
    								
    								<div class="widget-content">
    								    <?php
                                        $query2=mysqli_query($conn,"select * from blog2 order by id desc");
                                        while ($result2=mysqli_fetch_array($query2)) {
                         
                                    ?>
    									<article class="post">
    										<div class="">
    										    <a href="blog_dtl2.php?id=<?php echo $result2['id']?>">
    										        <div class="img-cont">
    										            <img class="zoom" src="adminpanel/product_img/blog_img/<?php echo $result2['blog_img'] ?>" alt="">
    										        </div>
        											<div class="text text-center"><h6 class="card-title"><?php echo $result2['heading']?></h6></div>
        											<div class="post-info text-center">By <?php echo $result2['writter']?></div>
        											<div class="post-info text-center"><?php echo $result2['date_of_update']?></div>
    											</a>
    										</div>
    									</article>
    									<?php
            } 
            ?>
    
    									<!--<article class="post">-->
    									<!--	<div class="post-inner">-->
    									<!--		<figure class="post-thumb"><a href="blog-detail.html"><img src="https://via.placeholder.com/70x80" alt=""></a></figure>-->
    									<!--		<div class="text"><a href="blog-detail.html">Writing a Simple App</a></div>-->
    									<!--		<div class="post-info">By Steve Krug</div>-->
    									<!--	</div>-->
    									<!--</article>-->
    									
    									<!--<article class="post">-->
    									<!--	<div class="post-inner">-->
    									<!--		<figure class="post-thumb"><a href="blog-detail.html"><img src="https://via.placeholder.com/70x80" alt=""></a></figure>-->
    									<!--		<div class="text"><a href="blog-detail.html">Writing a Simple App</a></div>-->
    									<!--		<div class="post-info">By Steve Krug</div>-->
    									<!--	</div>-->
    									<!--</article>-->
    								</div>
    							</div>
    							
    							<!-- Popular Tags -->
    							<!--<div class="sidebar-widget popular-tags">-->
    							
    								<!-- Sidebar Title -->
    							<!--	<div class="sidebar-title">-->
    							<!--		<h5>Tags</h5>-->
    							<!--	</div>-->
    								
    							<!--	<div class="widget-content">-->
    							<!--		<a href="#">#Webdesign</a>-->
    							<!--		<a href="#">#Mobileapp</a>-->
    							<!--		<a href="#">#Design</a>-->
    							<!--		<a href="#">#Hack</a>-->
    							<!--		<a href="#">#Webdesign</a>-->
    							<!--		<a href="#">#Hack</a>-->
    							<!--		<a href="#">#Design</a>-->
    							<!--		<a href="#">#Hack</a>-->
    							<!--	</div>-->
    							<!--</div>-->
    							
    						</aside>
    					</div>
    				</div>
    				
    			</div>
    			
    		</div>
    	</div>
    </section>
    	
    	<!-- Popular Courses -->
    	<!--<section class="popular-courses-section">-->
    	<!--	<div class="auto-container">-->
    	<!--		<div class="sec-title">-->
    	<!--			<h2>Most Popular Posts</h2>-->
    	<!--		</div>-->
    			
    	<!--		<div class="row clearfix">    -->
    				<!-- Cource Block Two -->
    	<!--			<div class="cource-block-two col-lg-4 col-md-6 col-sm-12">-->
    	<!--				<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">-->
    	<!--					<div class="image">-->
    	<!--						<a href="blog-detail.html"><img src="https://via.placeholder.com/370x253" alt="" /></a>-->
    	<!--					</div>-->
    	<!--					<div class="lower-content">-->
    	<!--						<h5><a href="blog-detail.html">How to Create and Use Bash Scripts</a></h5>-->
    	<!--						<div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re, they’re two waters.</div>-->
    	<!--						<div class="clearfix">-->
    	<!--							<div class="pull-left">-->
    	<!--								<div class="students">12 Lecturer</div>-->
    	<!--							</div>-->
    	<!--							<div class="pull-right">-->
    	<!--								<div class="hours">54 Hours</div>-->
    	<!--							</div>-->
    	<!--						</div>-->
    	<!--					</div>-->
    	<!--				</div>-->
    	<!--			</div>-->
    				
    				<!-- Cource Block Two -->
    	<!--			<div class="cource-block-two col-lg-4 col-md-6 col-sm-12">-->
    	<!--				<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">-->
    	<!--					<div class="image">-->
    	<!--						<a href="blog-detail.html"><img src="https://via.placeholder.com/370x253" alt="" /></a>-->
    	<!--					</div>-->
    	<!--					<div class="lower-content">-->
    	<!--						<h5><a href="blog-detail.html">How to Create and Use Bash Scripts</a></h5>-->
    	<!--						<div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re, they’re two waters.</div>-->
    	<!--						<div class="clearfix">-->
    	<!--							<div class="pull-left">-->
    	<!--								<div class="students">12 Lecturer</div>-->
    	<!--							</div>-->
    	<!--							<div class="pull-right">-->
    	<!--								<div class="hours">54 Hours</div>-->
    	<!--							</div>-->
    	<!--						</div>-->
    	<!--					</div>-->
    	<!--				</div>-->
    	<!--			</div>-->
    				
    				<!-- Cource Block Two -->
    	<!--			<div class="cource-block-two col-lg-4 col-md-6 col-sm-12">-->
    	<!--				<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">-->
    	<!--					<div class="image">-->
    	<!--						<a href="blog-detail.html"><img src="https://via.placeholder.com/370x253" alt="" /></a>-->
    	<!--					</div>-->
    	<!--					<div class="lower-content">-->
    	<!--						<h5><a href="blog-detail.html">How to Create and Use Bash Scripts</a></h5>-->
    	<!--						<div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re, they’re two waters.</div>-->
    	<!--						<div class="clearfix">-->
    	<!--							<div class="pull-left">-->
    	<!--								<div class="students">12 Lecturer</div>-->
    	<!--							</div>-->
    	<!--							<div class="pull-right">-->
    	<!--								<div class="hours">54 Hours</div>-->
    	<!--							</div>-->
    	<!--						</div>-->
    	<!--					</div>-->
    	<!--				</div>-->
    	<!--			</div>-->
    				
    	<!--		</div>-->
    			
    	<!--	</div>-->
    	<!--</section>-->
    	<!-- End Popular Courses -->

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