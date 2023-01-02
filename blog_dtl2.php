<?php
include("adminpanel/conn.php");
$id = $_GET['id'];
$query = mysqli_query($conn,"select * from blog2 where id ='$id' ");
$result = mysqli_fetch_array($query);
include("header1.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="keywords" content="blog" />
	<meta name="description" content="blog" />
	<meta name="author" content="uncovercampus" />
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


    <style>
    body{
        background-color: ;
    }
    p{
        font-size: large;
    }

  .zoom {
    transition: transform .5s;
  }

  .zoom:hover {
    transform: scale(1.05);
    box-shadow: black;
  }
  
  
  .header {
  position: fixed;
  top: 0;
  z-index: 1;
  width: 100%;
  background-color: #f1f1f1;
}

/* The progress container (grey background) */
.progress-container {
  width: 100%;
  height: 8px;
  background: #ccc;
}

/* The progress bar (scroll indicator) */
.progress-bar {
  height: 8px;
  background: #04AA6D;
  width: 0%;
}
  
  .container .content {
  position: relative;
  bottom: 200px;
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1; 
  padding-top: 15px;
  padding-bottom: 15px;
}
.blur{
    filter: blur(1.5px);
    -webkit-filter: blur(1.5px);
}
</style>


	<!-- inject css end -->

</head>
  
<body>

<!-- page wrapper start -->

<div class="page-wrapper">

<div class="header">
  <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>
</div>

<div>


<!--page title start-->
<!--<section>-->
<!--    <div class="container p-3" style="background-color: white; border-radius: 10px;">-->
<!--        <div class="p-4 align-items-center shadow">-->
<!--                <div class="text-center">-->
<!--                    <img class="" style="width: 90%; border-radius: 7px;opacity: ;" src='adminpanel/product_img/blog_img/<?php echo $result['blog_img'] ?>'>-->
<!--                </div>-->
<!--                <div class="section-title text-center">-->
<!--                    <h2 class="title mt-5"><span class=" text-center"><?php echo$result['heading'] ?></span></h2>-->
<!--                    <p class="card-text"><?php echo $result['blog_intro']?></p>-->
<!--                </div>    -->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->


    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="align-items-center shadow">
            <img class="blur" style="width: 100%; border-radius: 7px;" src='adminpanel/product_img/blog_img/<?php echo $result['blog_img'] ?>'>
        </div>
        <div class="container content text-center px-0 mx-0">
            <h2 class="title"><span class=" text-center" style="color: white;"><?php echo$result['heading'] ?></span></h2>
            <p class="card-text col-13"><?php echo $result['blog_intro']?></p>
        </div>
    </div>

<!--<section class="page-title o-hidden pos-r md-text-center" data-bg-color="">-->
<!--  <div class="page-title-pattern topBottom" data-bg-img="adminpanel/product_img/blog_img/<?php echo $result['blog_img'] ?>"></div>-->
<!--  <div class="container">-->
<!--    <div class="row align-items-center">-->
<!--      <div class="">-->
<!--        <h1 class="title"><span class=" text-center"><?php echo$result['heading'] ?></span></h1>-->
<!--        <p><?php echo $result['blog_intro']?></p>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->

<div id="serviceCard" class="pos-r bg-contain bg-pos-rb" data-bg-img="images/bg/07.png">
    <div class="container">
        <div>
            <div class="container">
                <div class="my-5">
                    <h3><?php echo $result['sub_heading1'] ?></h3>
                    <div class="mb-5">
                        <img style="height:100%; width: 70%; border-radius: 7px;" src='adminpanel/product_img/blog_img/<?php echo $result['blog_sub_img1'] ?>'>
                    </div>
                    <p><?php echo $result['para1'] ?></p>
                </div>
                
                <div class="my-5">
                    <h3><?php echo $result['sub_heading2'] ?></h3>
                    <div class="mb-5">
                        <img style="height:100%; width: 70%; border-radius: 7px;" src='adminpanel/product_img/blog_img/<?php echo $result['blog_sub_img2'] ?>'>
                    </div>
                    <p><?php echo $result['para2'] ?></p>
                </div>
                
                <div class="my-5">
                    <h3><?php echo $result['sub_heading3'] ?></h3>
                    <div class="mb-5">
                        <img style="height:100%; width: 70%; border-radius: 7px;" src='adminpanel/product_img/blog_img/<?php echo $result['blog_sub_img3'] ?>'>
                    </div>
                    <p><?php echo $result['para3'] ?></p>
                </div>
                
                <div class="my-5">
                    <h3><?php echo $result['sub_heading4'] ?></h3>
                    <div class="mb-5">
                        <img style="height:100%; width: 70%; border-radius: 7px;" src='adminpanel/product_img/blog_img/<?php echo $result['blog_sub_img4'] ?>'>
                    </div>
                    <p><?php echo $result['para4'] ?></p>
                </div>
                
                <div class="my-5">
                    <h3><?php echo $result['sub_heading5'] ?></h3>
                    <div class="mb-5">
                        <img style="height:100%; width: 70%; border-radius: 7px;" src='adminpanel/product_img/blog_img/<?php echo $result['blog_sub_img5'] ?>'>
                    </div>
                    <p><?php echo $result['para5'] ?></p>
                </div>
                
                <div class="my-5">
                    <h3><?php echo $result['sub_heading6'] ?></h3>
                    <div class="mb-5">
                        <img style="height:100%; width: 70%; border-radius: 7px;" src='adminpanel/product_img/blog_img/<?php echo $result['blog_sub_img6'] ?>'>
                    </div>
                    <p><?php echo $result['para6'] ?></p>
                </div>
                
                <div class="my-5">
                    <h3><?php echo $result['sub_heading7'] ?></h3>
                    <div class="mb-5">
                        <img style="height:100%; width: 70%; border-radius: 7px;" src='adminpanel/product_img/blog_img/<?php echo $result['blog_sub_img7'] ?>'>
                    </div>
                    <p><?php echo $result['para7'] ?></p>
                </div>
                
                <div class="my-5">
                    <h3><?php echo $result['sub_heading8'] ?></h3>
                    <div class="mb-5">
                        <img style="height:100%; width: 70%; border-radius: 7px;" src='adminpanel/product_img/blog_img/<?php echo $result['blog_sub_img8'] ?>'>
                    </div>
                    <p><?php echo $result['para8'] ?></p>
                </div>
                
                <div class="my-5">
                    <h3><?php echo $result['sub_heading9'] ?></h3>
                    <div class="mb-5">
                        <img style="height:100%; width: 70%; border-radius: 7px;" src='adminpanel/product_img/blog_img/<?php echo $result['blog_sub_img9'] ?>'>
                    </div>
                    <p><?php echo $result['para9'] ?></p>
                </div>
                
                <div class="my-5">
                    <h3><?php echo $result['sub_heading10'] ?></h3>
                    <div class="mb-5">
                        <img style="height:100%; width: 70%; border-radius: 7px;" src='adminpanel/product_img/blog_img/<?php echo $result['blog_sub_img10'] ?>'>
                    </div>
                    <p><?php echo $result['para10'] ?></p>
                </div>
            </div>
            <div class="shadow" style="border-radius: 10px;">
                <h6 class="text-center"><b>writter - </b><span><?echo $result['writter'] ?></span></h6>
                <h6 class="text-center"><b>writter email - </b><span><?echo $result['writter_email'] ?></span></h6>
                <h6 class="text-center"><b>writter linkedin - </b><span><?echo $result['writter_linkedin'] ?></span></h6>
            </div>
        </div>
    </div>
</div>


<!--page title end-->



<!-- body content start-->

<div class="page-content"></div>

<!-- body content end -->

<!--footer start-->

<script src="footer.js"></script>

<!--footer end-->

</div>
</div>

<!-- page wrapper end -->



<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="la la-hand-pointer-o"></i></a></div>

<!--back-to-top end-->
 
<!-- inject js start -->

<!--== jquery -->

<script>
    window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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