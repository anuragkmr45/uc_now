<?php
include("adminpanel/conn.php");
include("header1.php");
$college_id=$_GET['id'];
$college_details=mysqli_query($conn,"select * from college where id='$college_id'");						
$result_info=mysqli_fetch_array($college_details);
?>

<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<meta name="keywords" content="#" />
<meta name="description" content="#" />
<meta name="author" content="#" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>UncoverCampus</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="images/favicon.ico" />

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

<!--== responsive -->
<link href="css/responsive.css" rel="stylesheet" type="text/css" />



<!-- inject css end -->
<style type="text/css">

table, td, th {  
  border: 2px solid #ddd;
  text-align: center;

}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;

}
th{
  font-weight:800;
}

</style>



</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">

<!-- preloader start -->

<div id="ht-preloader">
  <div class="clear-loader">
    <div class="loader">
      <div class="loader-div"><span>Uncovered</span>
      </div>
    </div>
  </div>
</div>

<!-- preloader end -->



<!--page title start-->

<section class="page-title o-hidden pos-r md-text-center" data-bg-color="#d2f9fe">
  <div class="page-title-pattern topBottom" data-bg-img="images/bg/01.png"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12">
        <h1 class="title"><span>About </span><?php echo$result_info['college_name'];?></h1>
        <p><?php echo$result_info['location'];?></p>
      </div>
      <div class="col-lg-5 col-md-12 text-lg-right md-mt-3">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">About
            </li>
            <li class="breadcrumb-item active" aria-current="page">College</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<!--page title end-->


<!--body content start-->

<div class="page-content">

<!--step start-->

<section>
 <div class="container">
 	<div class="row align-items-center">
      <div class="section-title">
          <h2 class="title">Courses and fees</h2>
          <div class="title-bdr">
            <div class="left-bdr"></div>
            <div class="right-bdr"></div>
          </div>
          <Table class="table table-striped table-bordered">
            <thead class="thead-dark">
              <tr  >
                <th style="width:">Courses</th>
                <th colspan="2">Fees</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo$result_info['speciality'] ?></td>
                <td><?php echo$result_info['fees'] ?></td>
              </tr>
            </tbody>
          </Table>
      </div>
    </div>
</div>
</section>
<!--step end-->

<!--counter start-->



<!--about end-->


<!--counter end-->

<!--team start-->



<!--blog end-->


<!--subscribe start-->

<!--subscribe end-->

</div>

<!--body content end--> 


<!--footer start-->

<div id="waterdrop"></div>
<footer class="footer theme-bg">
  <div class="primary-footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 col-md-6">
          <div class="footer-logo mb-3">
            <img id="footer-logo-white-img" src="images/logo-white.png" class="img-center" alt="">
          </div>
          <p class="mb-0">Sassaht - SaaS, Startup & WebApp Prebuilt Template Is fully responsible, Sassaht is the Creative, Modern HTML5 Template. Sassaht is an the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted.</p>
          
        </div>
        <div class="col-lg-4 col-md-6 sm-mt-5">
          <h4 class="mb-4 text-white">Usefull link</h4>
          <div class="footer-list justify-content-between d-flex">
          <ul class="list-unstyled w-100">
            <li><a href="about.php">About Us</a>
            </li>
            <li><a href="college.php">Service</a>
            </li>
            <li><a href="#">Team</a>
            </li>
            <li><a href="#">Team Single</a>
            </li>
            <li><a href="contact.php">Contact Us</a>
            </li>
          </ul>
          <ul class="list-unstyled w-100">
            <li><a href="#">Blog</a>
            </li>
            <li><a href="#">Faq</a>
            </li>
            <li><a href="#">Error 404</a>
            </li>
            <li><a href="#">Privacy Policy</a>
            </li>
            <li><a href="#">Terms</a>
            </li>
          </ul>
        </div>
        </div>
        <div class="col-lg-4 col-md-12 md-mt-5">
          <div class="footer-cntct">
          <h4 class="mb-4 text-white">Get In Touch</h4>
          <ul class="media-icon list-unstyled">
            <li>
              <p class="mb-0"><i class="la la-map-o"></i>  <b>423B, Road Wordwide Country, USA</b>
              </p>
            </li>
            <li><i class="la la-envelope-o"></i>  <a href="mailto:themeht23@gmail.com"><b>themeht23@gmail.com</b></a>
            </li>
            <li><i class="la la-phone"></i>  <a href="tel:+912345678900"><b>+91-234-567-8900</b></a>
            </li>
          </ul> 
          <div class="social-icons mt-3">
            <ul class="list-inline">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li><a href="#"><i class="fab fa-dribbble"></i></a>
              </li>
              <li><a href="#"><i class="fab fa-skype"></i></a>
              </li>
            </ul>
          </div>
          </div>         
        </div>
      </div>
    </div>
  </div>
  <div class="secondary-footer mt-5 text-center">
    <div class="container">
      <div class="copyright">
        <div class="row">
          <div class="col-md-12"> <span>UncoverCampus <u><a href="index.php"></a></u> | All Rights Reserved</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--footer end-->


</div>

<!-- page wrapper end -->


<!--color-customizer start-->



<!--color-customizer end-->


<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="la la-hand-pointer-o"></i></a></div>

<!--back-to-top end-->

 
<!-- inject js start -->

<!--== jquery -->
<script src="js/common-theme.js"></script>

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