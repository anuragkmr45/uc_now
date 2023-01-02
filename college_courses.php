<?php
include("adminpanel/conn.php");
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

<!--== responsive -->
<link href="css/responsive.css" rel="stylesheet" type="text/css" />

<!--== color-customizer -->


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
      <div class="loader-div"><span>Uncover</span>
      </div>
    </div>
  </div>
</div>

<!-- preloader end -->


<!--header start-->

      <header id="site-header" class="header" >
      <div id="header-wrap">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <!-- Navbar -->
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand logo " href="index.php" >
                  
                  <div class="topleft " >
                  
                    <p  style="margin-top:10px;">
                    <img id="logo-img" class=" img-center" style="transform:translateY(-15px);margin-top:18px;height:65px;width: 295px;" src="images/l1.png">
                    <!-- <span  style="padding-top:30px;color: black;">U</span><span style="color: black" 
                        >n<span style="font-size: 45px;font-weight: bold; color: #38b1e4;font-family: Stencil">C</span>over </span><span style="color: black">Ca</span><span style="font-size: 45px;font-weight: bold; color:#fc8b25 ;font-family: Colona MT">M</span><span style="color: black">pus</span> --></p>
                  </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                  data-target="#navbarNavDropdown" aria-expanded="false"
                  aria-label="Toggle navigation"> <span></span>
                  <span></span>
                  <span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav ml-auto mr-auto">
                    <!-- Home -->
                    <li class="nav-item"> <a class="nav-link active" style="color:green;" 
                        href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" style=""  href="#" data-toggle="dropdown">Services</a>
                                         <div class="dropdown-menu">
                                           <ul class="list-unstyled">
                                              <li><a href="college.php">College Finder</a>
                                              </li>
                                              <li><a href="campus_search2.php">Campus Explorer</a>
                                              </li>
                                              <li><a href="pg.php">PG Finder</a>
                                              </li>
                                              <li><a href="#events.php">Event</a>
                                              </li>
                                              <li><a href="#">Academics</li>
                                           </ul>
                                         </div>
                                        </li>
                    
                    <li class="nav-item "> <a class="nav-link" href="about.php"
                        >About us</a>
                      
                    </li>
                    
                    <li class="nav-item "> <a class="nav-link" href="contact.php"
                        >Contact</a>
                      
                    </li>
                  </ul>
                </div>
                <div class="right-nav align-items-center d-flex justify-content-end list-inline">
                  <div class="header-call d-flex align-items-center mr-3">
                    <h5>call:</h5>
                    <a href="+918376008292"><b>+91-8376008292</b></a>
                  </div> <a class="btn btn-theme btn-sm" href="adminpanel/index.php"><span>Login</span></a>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>

<!--header end-->


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

<script src="footer.js"></script>

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