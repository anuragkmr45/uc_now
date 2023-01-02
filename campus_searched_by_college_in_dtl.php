<?php

include("adminpanel/conn.php");
$selected_college_name=$_GET['selected_college_name'];
$cp_name=$_GET['cp_name'];
$query=mysqli_query($conn,"select * from campus where name='$cp_name'");
$result=mysqli_fetch_array($query);



?>





<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="keywords" content="instagram.com/sarthakbakshi/ && 9076782112  " />
	<meta name="description" content="linkedin.com/in/sarthak-bakshi" />
	<meta name="author" content="Sarthak Bakshi,Anikesh Sharma,Yogeshwar" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Uncovercampus</title>

	<!-- favicon icon -->
	<link rel="shortcut icon" href="images/ULLU2.png" />



	<!-- inject css start -->

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

	<!--== color-customizer -->


</head>
  
<body>

<!-- page wrapper start -->

<div class="page-wrapper">

		<!--header start-->

		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
		<script>$(document).ready(function(){
			   	  $('.navbar-nav li a').removeClass('active');
  				  $('#services').addClass("active");
		});</script>
		<script src="header.js"></script>

		<!--header end-->



<!--page title start-->

<section class="page-title o-hidden pos-r md-text-center" data-bg-color="#d2f9fe">
  <div class="page-title-pattern topBottom" data-bg-img="images/bg/01.png"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12">
        <h1 class="title"><span>Campus</span> Explorer</h1>
        <p>We help you find every facilities near your college <?php echo $selected_college_name; ?></p>
      </div>
      <div class="col-lg-5 col-md-12 text-lg-right md-mt-3">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">Campus Explorer
            </li>
            <li class="breadcrumb-item active" aria-current="page">Exploreing Section</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<!--page title end-->



<!--body content start-->

<div class="page-content">

<!--service details start-->

<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12">
          <img class="img-fluid radius w-100" src="adminpanel/product_img/campus_exp/<?php echo $result['campus_img'] ?>" alt="">
      </div>
      <div class="col-lg-5 col-md-12 md-mt-5">
        <ul class="portfolio-meta list-unstyled">
              <li class="mb-5"><i class="la la-user"></i>  <span> Owner</span> <?php echo $result['owner_nm'] ?> </li>
              <li class="mb-5"><i class="la la-pencil-square"></i>  <span> name</span> <?php echo $result['name'] ?></li>
              <li class="mb-5"><i class="la la-calendar-check-o"></i>  <span> Timings</span> <?php echo $result['op_cl_time'] ?> </li>
              <li><i class="la la-map"></i>  <span> Location</span> <?php echo $result['location'] ?></li>
            </ul>
          </div>
    </div>
  </div>
</section>


<section class="grey-bg project-details">
  <div class="container">
    <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="section-title">
              <h2 class="title"><?php echo $result['name'] ?> <span>Description</span></h2> 
              <div class="title-bdr">
            <div class="left-bdr"></div>
            <div class="right-bdr"></div>
          </div>  
          </div>        
          </div>
    </div>
    <div class="row">
          <div class="col-lg-7 col-md-12">
            <p class="lead text-bg"><?php echo $result['decr'] ?>.</p>
            </div>
          <div class="col-lg-5 col-md-12">
            <ul class="list-unstyled list-icon">
              <li class="mb-4"><i class="fas fa-check-circle"></i> Contact Number: <?php echo $result['phone'] ?>  </li>
              <li class="mb-4"><i class="fas fa-check-circle"></i> Email address: <?php echo $result['mail'] ?> </li>
            </ul>
          </div>
        </div>
  </div>
</section>

<!--service details end-->



</div>

<!--body content end--> 



<!--footer start-->

<script src="footer.js"></script>

<!--footer end-->


</div>

<!-- page wrapper end -->





<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="la la-hand-pointer-o"></i></a></div>

<!--back-to-top end-->

 
<!-- inject js start -->

<!--== jquery -->
<script src="js/common-theme.js"></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

<!--== nice-select -->
<script src="js/jquery.nice-select.js"></script>

<!--== owl-carousel -->
<script src="js/owl-carousel/owl.carousel.min.js"></script> 

<!--== magnific-popup --> 
<script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

<!--== counter -->
<script src="js/counter/counter.js"></script> 

<!--== isotope -->
<script src="js/isotope/isotope.pkgd.min.js"></script> 

<!--== particles -->
<script src="js/particles.min.js"></script>

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

<!-- inject js end -->


</body>

</html>