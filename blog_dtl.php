<?php
include("adminpanel/conn.php");
$id = $_GET['id'];
$query = mysqli_query($conn,"select * from blog where id ='$id' ");
$result = mysqli_fetch_array($query);
include("header1.php");

?>

		<!--header end-->


		<!--hero section start-->
		

		<!--hero section end-->


		<!--body content start-->

    <!--End Page Title-->
	
	<!--Sidebar Page Container-->
	<section>
    <div class="sidebar-page-container">
		<div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-1.png)"></div>
		<div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-2.png)"></div>
		<div class="circle-one"></div>
		<div class="circle-two"></div>
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!-- Sidebar Side -->
                <div class="sidebar-side style-two blog-sidebar col-lg-3 col-md-12 col-sm-12">
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
                                        $query2=mysqli_query($conn,"select * from blog order by id desc LIMIT 5");
                                        while ($result2=mysqli_fetch_array($query2)) {
                                    ?>
									<article class="post">
									    <a href="blog_dtl.php?id=<?php echo $result2['id']?>">
    										<div class="post-inner">
    											<figure class="post-thumb"><img src="adminpanel/product_img/blog_img/<?php echo $result2['blog_img'] ?>" style="width: 50%;" alt=""></figure>
    											<div class="text"><?php echo $result2['heading']?></div>
    											<div class="post-info"><?php echo $result2['writter']?></div>
    										</div>
    									</a>
									</article>
									<?php
                                        }
									?>
								</div>
							</div>
							
							<!-- Popular Tags -->
							<div class="sidebar-widget popular-tags">
							
								<!-- Sidebar Title -->
								<!--<div class="sidebar-title">-->
								<!--	<h5>Tags</h5>-->
								<!--</div>-->
								
								<!--<div class="widget-content">-->
								<!--	<a href="#">#Webdesign</a>-->
								<!--	<a href="#">#Mobileapp</a>-->
								<!--	<a href="#">#Design</a>-->
								<!--	<a href="#">#Hack</a>-->
								<!--	<a href="#">#Webdesign</a>-->
								<!--	<a href="#">#Hack</a>-->
								<!--	<a href="#">#Design</a>-->
								<!--	<a href="#">#Hack</a>-->
								<!--</div>-->
							</div>
							
						</aside>
					</div>
				</div>
				
				<!-- Content Side -->
                <div class="content-side blog-detail-column col-lg-9 col-md-12 col-sm-12">
                	<div class="blog-detail">
						<div class="inner-box">
							<h3><?php echo$result['heading'] ?></h3>
							<ul class="author-info">
								<li>By <?echo $result['writter'] ?></li>
								<li><span class="theme_color"><?echo $result['date_of_update'] ?></span></li>
								<!--<li>15 Commnets</li>-->
							</ul>
							<div class="image">
								<img style="width: 90%;" src="adminpanel/product_img/blog_img/<?php echo$result['blog_img'] ?>" alt="" />
							</div>
							<h4><?php echo$result['heading'] ?></h4>
							<p><?php echo$result['blog_intro'] ?></p>
							<h4>Know more in detail</h4>
							<p><?php echo$result['para'] ?></p>
							<!--<div class="social-box">-->
							<!--	<span>Share this article on </span>-->
							<!--	<a href="#" class="fa fa-facebook-square"></a>-->
							<!--	<a href="#" class="fa fa-twitter-square"></a>-->
							<!--	<a href="#" class="fa fa-linkedin-square"></a>-->
							<!--	<a href="#" class="fa fa-github"></a>-->
							<!--</div>-->
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
	</div>
	
	</section>
	

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