<?php
error_reporting(0);
include("adminpanel/conn.php");
include("header1.php");

// $selected_college_name=$_GET['selected_college_name'];

$college_name=$_GET['college_name'];

$campus_details=mysqli_query($conn,"select * from campus_explorer where college_name='$college_name'");						
$result_info=mysqli_fetch_array($campus_details);

// $query=mysqli_query($conn,"select location from college where college_name='$selected_college_name'");
// $result=mysqli_fetch_array($query);

// $result=mysqli_fetch_array($query);		
                /*if($query){echo "<script> alert('query working');</script> ";}
                  else{echo "<script> alert('query not working');</script> ";}
                  if($result){echo "<script> alert('result working');</script> ";}
                else{echo "<script> alert('result not working');</script> ";}  */
                
$given_location=$result['location'];

$explode_location= explode(",",$given_location);



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


    <!--owl carousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
          .carousel {
    width: 69vh;
    height: 70vh;
    position: relative;
  }

  .carousel>ul {
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .slide {
    position: absolute;
    inset: 0;
    opacity: 0;
    transition: 200ms opacity ease-in-out;
    transition-delay: 200ms;
  }

  .slide>img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
  }

  .slide[data-active] {
    opacity: 1;
    z-index: 1;
    transition-delay: 0ms;
  }

  .carousel-button {
    position: absolute;
    z-index: 2;
    background: none;
    border: none;
    font-size: 4rem;
    top: 50%;
    transform: translateY(-50%);
    color: rgba(255, 255, 255, .5);
    cursor: pointer;
    border-radius: .25rem;
    padding: 0 .5rem;
    background-color: rgba(0, 0, 0, .1);
  }

  .carousel-button:hover,
  .carousel-button:focus {
    color: white;
    background-color: rgba(0, 0, 0, .2);
  }

  .carousel-button:focus {
    outline: 1px solid black;
  }

  .carousel-button.prev {
    left: 1rem;
  }

  .carousel-button.next {
    right: 1rem;
  }

  .zoom {
    transition: transform .5s;
  }

  .zoom:hover {
    transform: scale(1.05);
    box-shadow: black;
  }
  
  .carousel {
  width: 100vw;
  height: 100vh;
  position: relative;
}

.carousel > ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

.slide {
  position: absolute;
  inset: 0;
  opacity: 0;
  transition: 200ms opacity ease-in-out;
  transition-delay: 200ms;
}

.slide > img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
}

.slide[data-active] {
  opacity: 1;
  z-index: 1;
  transition-delay: 0ms;
}

.carousel-button {
  position: absolute;
  z-index: 2;
  background: none;
  border: none;
  font-size: 2rem;
  top: 50%;
  transform: translateY(-50%);
  color: rgba(255, 255, 255, .5);
  cursor: pointer;
  border-radius: .25rem;
  padding: 0 .5rem;
  background-color: rgba(0, 0, 0, .1);
}

.carousel-button:hover,
.carousel-button:focus {
  color: white;
  background-color: rgba(0, 0, 0, .2);
}

.carousel-button:focus {
  outline: 1px solid black;
}

.carousel-button.prev {
  left: 1rem;
}

.carousel-button.next {
  right: 1rem;
} 
    </style>

     
	<!-- inject css end -->

</head>
  
<body>

<!-- page wrapper start -->

<div class="page-wrapper">



<!--page title start-->

<!--<section class="page-title o-hidden pos-r md-text-center" data-bg-color="#d2f9fe">-->
<!--  <div class="page-title-pattern topBottom" data-bg-img="images/bg/01.png"></div>-->
<!--  <div class="container">-->
<!--    <div class="row align-items-center">-->
<!--      <div class="col-lg-7 col-md-12">-->
<!--        <h1 class="title"><span>Explorer</span> <?php echo $result_info['college_name']?></h1>-->
<!--        <p>We help you find every facilities near your college </p>-->
<!--      </div>-->
<!--      <div class="col-lg-5 col-md-12 text-lg-right md-mt-3">-->
<!--        <nav aria-label="breadcrumb" class="page-breadcrumb">-->
<!--          <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="index.php">Home</a></li>-->
<!--            <li class="breadcrumb-item"><a href="campus_search2.php">Campus Explorer</a></li>-->
<!--            <li class="breadcrumb-item active" aria-current="page"> <?php echo $result_info['college_name']?> </li>-->
<!--          </ol>-->
<!--        </nav>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->

<!--page title end-->


<!--body content start-->

<div class="page-content">

<section class="mt-5">
    <h1 class="title text-center"><span>Explorer Areas Near </span> <?php echo $result_info['college_name']?></h1>
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-8 col-md-12 mx-auto">
      </div>
    </div>
  
  <section>
      <div class="container py-2">
          <div class="row align-item center">
              <div class="mx-auto">
                  <button class="btn btn-theme Single" target="1" style="margin:16px;">Cafes</button>
                  <button class="btn btn-theme Single" target="2" style="margin:16px;">Restaurant</button>
                  <button class="btn btn-theme Single" target="3" style="margin:16px;">Clubs</button>
                  <button class="btn btn-theme Single" target="4" style="margin:16px;">Amusement</button>
              </div>
          </div>
      </div>
  </section>
  
  
  
  
  <section>
      <div id="div1" class="target">
          
          <!--blog start-->

    
    
  <div class="container">
    <div class="row align-items-center">

    
      <div class="col-lg-4 col-md-12">
        <div class="section-title">
          <h2 class="title">Best Cafes Near You</h2>
          <div class="title-bdr">
              <div class="left-bdr"></div>
              <div class="right-bdr"></div>
          </div>
          
          <p>Check out the best cafes near your college .</p>
        </div>
        
        <div class="post-categories mt-4">
            <!--<a class="btn btn-theme mt-3" href="event_reg.php">Register Event With <br> Uncovercampus</a>-->
        </div>
      </div>
      <div class="col-lg-8 col-md-12">
        <div class="owl-carousel owl-center owl-nav2" data-dots="false" data-nav="true" data-items="2" data-md-items="2" data-sm-items="1" data-center="center" data-margin="30">
                <?php
                $query_top3=mysqli_query($conn,"SELECT * FROM campus_explorer where  college_name='$college_name' and exp_type='cafes' ORDER BY id DESC LIMIT 3");
                while ($result=mysqli_fetch_array($query_top3 ) ) {
                ?>
         
              <div class="item" >
                  <a href="college_cafes.php?id=<?php echo $result['id']?>">
                <div class="">
                  <div class="post-image">
                    <img class="img-fluid" style="height:40vh;" src="adminpanel/product_img/campus_exp/<?php echo$result['img'] ?>" alt="">
                  </div>
                  <div class="post-desc">
                    <div class="post-meta">
                      <div class="featured-item" style="text-align:center;">
                        <div class="featured-title"><h5><?php echo$result['name'] ?></h5></div>
                        <p><span><b>Customer Rating</b> - <?php echo$result['rating'] ?> / 5</span></p>
                    </div>
                    </div>
                  </div>
                </div>
                </a>
              </div>
          
                      <?php
                    }
                    ?>
           
        </div>
      </div>
    </div>
  </div>

<!--blog end-->
          
        <div class="container">
            <div class="row">
        
            <?php
                $query_top3=mysqli_query($conn,"SELECT * FROM campus_explorer where  college_name='$college_name' and exp_type='cafes' ORDER BY id DESC");
                while ($result=mysqli_fetch_array($query_top3 ) ) {
            ?>
                
            <div class="col-lg-4 col-md-4 col-sm-6">
                <a href="college_cafes.php?id=<?php echo $result['id']?>">
                    <div class="post-image">
                        <img class="img-fluid" style="height: 40vh;" src="adminpanel/product_img/campus_exp/<?php echo$result['img'] ?>" alt="">
                    </div>
                    <div class="featured-item " style="text-align:center;">
                        <div class="featured-title"><h5><?php echo$result['name'] ?></h5></div>
                         <p><span><b>Customer Rating</b> - <?php echo$result['rating'] ?> / 5</span></p>
                    </div>
                </a>
            </div>
        <?php
        } 
        ?>
        </div>
        </div>
          
          
      </div>
      
      <div id="div2" class="target">.</div>
      
      <div id="div3" class="target">..</div>
      
      <div id="div4" class="target">...</div>
      
  </section>
  

</div>
</div>

<!--footer start-->

<script src="footer.js"></script>

<!--footer end-->




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



<script type="text/javascript">
  jQuery(function(){
    jQuery('#showall').click(function(){
      jQuery('.target').show();
    })
    jQuery('.Single').click(function(){
      jQuery('.target').hide();
      jQuery('#div'+$(this).attr('target')).show();
  })      
  });
  
</script>




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