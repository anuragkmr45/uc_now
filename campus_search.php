
<?php

include("adminpanel/conn.php");
$query=mysqli_query($conn,"select * from college");



?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="keywords" content="# " />
	<meta name="description" content="#" />
	<meta name="author" content="#" />
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


	<!-- inject css end -->

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
        <p>We're Build With Latest And Modern Code</p>
      </div>
      <div class="col-lg-5 col-md-12 text-lg-right md-mt-3">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">Campus Explorer
            </li>
            <li class="breadcrumb-item active" aria-current="page">Search College</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<!--page title end-->


<!--body content start-->

<div class="page-content">

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8  col-md-12 order-lg-12">
              <div class="row">
                           <?php 
                               	
                                 while ($result=mysqli_fetch_array($query))	
                               {				
                            ?>
                            <div class="col-lg-6" >
                            <div class="post mt-3 ">
                              <div class="post-image">
                                <img class="img-fluid h-80 w-100" style="heigth:100px"src="images/blog/01.jpg" alt="">
                              </div>
                              <div class="post-desc">
                                <div class="post-meta" >
                                  <ul class="list-inline">
                                    <li><i class="la la-user mr-1"></i> Rating- <?php echo $result['rating']?></li>
                                  </ul>
                                </div>
                                <div class="post-title"style="height:100px">
                                  <h4><a href="#"><?php echo $result['college_name']?></a></h4>
                                </div>
                                <div class="post-categories mt-4">
                                  <ul class="list-inline">
                                    <li><?php echo $result['location']?></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            </div>
                            <?php 
                                } 
                            ?>  
               </div>            
        
        
        <nav aria-label="Page navigation" class="mt-8">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-long-arrow-alt-left"></i></a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a>
            </li>
            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="col-lg-4 col-md-12 sidebar order-lg-1 md-mt-5">
        <div class="widget">
          <div class="widget-search">
            <form class="form-inline form">
              <div class="widget-searchbox">
                <button type="submit" class="search-btn"> <i class="fas fa-search"></i>
                </button>
                <input type="text" name="search_coll_input" list="collage_srch" placeholder="Search Here..." class="form-control">
                <datalist id="collage_srch">
                                  <option value="sarthak">sarthak</option>
                                  <option value="sarthakbakshi">sarthakbakshi</option>
                                  <option value="sarthakdavid">sarthakdavid</option>
                                  <?php
                                        while ($result=mysqli_fetch_array($query)) {
                                  ?>
                                  <option value="<?php echo $result['college_name'];?>"><?php echo $result['college_name'];?></option>
                                  
                           <?php } ?>
                            
                </datalist>
                
              </div>
            </form>
          </div>
        </div>
        <div class="widget">
          <h5 class="widget-title">Recent Post</h5>
          <div class="recent-post">
            <ul class="list-unstyled">
                               <?php 
                               	while ($result2=mysqli_fetch_array($query))	
                               {
                                ?>
                                <li class="mb-3">
                <div class="recent-post-thumb">
                  <img class="img-fluid" src="images/blog/blog-thumb/01.jpg" alt="">
                </div>
                <div class="recent-post-desc"> <a href="blog-single.html">Sassaht Built With Powerfull Sass</a> 
                  <div class="post-date">23 <span>Jan 2019</span>
                  </div>
                </div>
              </li>
                                 <?php
                                }
                                ?>
              <li class="mb-3">
                <div class="recent-post-thumb">
                  <img class="img-fluid" src="images/blog/blog-thumb/01.jpg" alt="">
                </div>
                <div class="recent-post-desc"> <a href="blog-single.html">Sassaht Built With Powerfull Sass</a> 
                  <div class="post-date">23 <span>Jan 2019</span>
                  </div>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
        <div class="widget">
          <h5 class="widget-title">Locations</h5>
          <ul class="widget-categories list-unstyled">
                             <?php 
                                while ($result3=mysqli_fetch_array($query))
                               {				
                            ?>
                            <li> <a href="#"><?php echo $result3['location']?> <span>(5)</span></a>
                           </li>
                            <?php 
                                } 
                            ?>
            <li> <a href="#">Design Tutorials <span>(5)</span></a>
            </li>
          </ul>
        </div>        
        
        <div class="widget">
          <h5 class="widget-title">Tags</h5>
          <ul class="widget-tags list-inline">
            <li> <a href="#">Design</a>
            </li>
            <li> <a href="#">Seo</a>
            </li>
            <li> <a href="#">Marketing</a>
            </li>
            <li> <a href="#">Business</a>
            </li>
            <li> <a href="#">analysis</a>
            </li>
            <li> <a href="#">Email</a>
            </li>
            <li> <a href="#">Digital</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

</div>

<!--body content end--> 

<?php
if($result){
  echo"<script>alert('query working');</script>";
}

?>
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