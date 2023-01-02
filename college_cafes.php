<?php
include("adminpanel/conn.php");
$id = $_GET['id'];
$query = mysqli_query($conn,"select * from campus_explorer where id='$id'");
$result = mysqli_fetch_array($query);

// $query_no_reg = mysqli_query($conn,"SELECT count(*) AS NUMBEROFCOLUMNS FROM event_stu_reg WHERE event = '$event';");	
// $result_stu = mysqli_num_rows($query_no_reg);
include("header2.php");
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
	
	<!--== lightbox  -->
	<link href="css/lightbox.css" rel="stylesheet" type="text/css" />

	<!--== color-customizer -->


    <style>
    body{
        background-color: ;
    }
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
  /*width: 100%;*/
  /*height: 100%;*/
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

.tablink {
  background-color: rgba(194, 255, 217, 0.458);
  color: #353c5e;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 33.31%;
}

.tablink:hover {
  background-color: #;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  /*color: white;*/
  display: none;
  padding: 100px 20px;
  height: 100%;
}

#Home {background-color: white;}
#News {background-color: white;}
#Contact {background-color: white;}
/*#About {background-color: white;}*/
    </style>


	<!-- inject css end -->

</head>
  
<body>



<!-- page wrapper start -->

<div class="page-wrapper">



<!--page title start-->
<section style="background-color: #f1f1f1">
    <div class="container p-3" style="background-color: white; border-radius: 7px;">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="section-title">
                    <h2 class="title mt-5"><span><?php echo$result['name'] ?></span></h2>
                    <p>One of the best <?php echo $result['exp_type'] ?> near <?php echo $result['college_name'] ?></p>
                </div>
                
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="disp-1 mt-5">
                    <div class="owl-carousel owl-theme">
                        <div class="item mx-1">
                            <img id="" style="border-radius:10px; height:260px;" src="adminpanel/product_img/campus_exp/<?php echo$result['img'] ?>" onclick="openModal();currentSlide(1)" class="zoom hover-shadow">
                        </div>
                        
                        <div class="item mx-1">
                            <img id="" style="border-radius:10px; height:260px;" src="adminpanel/product_img/campus_exp/<?php echo$result['img1'] ?>" onclick="openModal();currentSlide(1)" class="zoom hover-shadow">
                        </div>
                        
                        <div class="item mx-1">
                            <img id="" style="border-radius:10px; height:260px;" src="adminpanel/product_img/campus_exp/<?php echo$result['img2'] ?>" onclick="openModal();currentSlide(1)" class="zoom hover-shadow">
                        </div>
                        
                        <div class="item mx-1">
                            <img id="" style="border-radius:10px; height:260px;" src="adminpanel/product_img/campus_exp/<?php echo$result['img3'] ?>" onclick="openModal();currentSlide(1)" class="zoom hover-shadow">
                        </div>
                    </div>
                </div>
            </div>
            <!-- The Modal/Lightbox -->
        <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content" style="height: 100%;">

                <div class="m-auto mySlides" style="height: 95%;">
                    <div class="numbertext"></div>
                        <img style="width: 100% ; height:90% ;background-color: black;" src="adminpanel/product_img/campus_exp/<?php echo$result['img'] ?>" >
                </div>

                <div class="m-auto mySlides" style="height: 95%;">
                    <div class="numbertext"></div>
                    <img style="width: 100% ; height:90% ;" src="adminpanel/product_img/campus_exp/<?php echo$result['img1'] ?>" >
                </div>

                <div class="m-auto mySlides" style="height: 95%;">
                    <div class="numbertext"></div>
                    <img style="width: 100% ; height:90% ;" src="adminpanel/product_img/campus_exp/<?php echo$result['img2'] ?>" >
                </div>

                <div class="m-auto mySlides" style="height: 95%;">
                    <div class="numbertext"></div>
                    <img style="width: 100% ; height:90% ;" src="adminpanel/product_img/campus_exp/<?php echo$result['img3'] ?>" >
                </div>
    
                <div class="m-auto mySlides" style="height: 95%;">
                    <div class="numbertext"></div>
                    <img style="width: 100% ; height:90% ;" src="adminpanel/product_img/campus_exp/<?php echo$result['img4'] ?>" >
                </div>

                <!-- Next/previous controls -->
                <div class="d-flex justify-content-center" style="cursor: pointer;">
                    <a class="prev" style="margin-right: 98%;color: black;" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" style="color: black;" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <!-- Caption text -->
                <div class="caption-container" style="cursor: pointer;">
                    <p id="caption" style="cursor: pointer;"></p>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<!--page title end-->



<!-- body content start-->

<div class="page-content">
    
    <div style="background-color: #f1f1f1">
        <div class="container" style="background-color: rgba(194, 255, 217, 0.458);">
            <button class="tablink" onclick="openPage('Home', this, 'white')" id="defaultOpen">About</button>
            <button class="tablink" onclick="openPage('News', this, 'white')" >Special Offers</button>
            <button class="tablink" onclick="openPage('About', this, 'white')" >Photos and Reviews </button>

            <div id="Home" class="tabcontent">
                <div class="container">
                    <div>
                        <div class="team-description">
                            <div class="p-3" style="background-color: rgba(194, 255, 217, 0.458);">
                                <h5> <i class="fas fa-map-marker-alt"></i> Distance from <?php echo$result['college_name']?> :: <?php echo$result['dist_from_college']?> </h5>
                                <h5><i class="fas fa-star-half-alt"></i> Rating : <?php echo$result['rating']?> / 5</h5>
                                <h5><i class="fas fa-money-check-alt"></i> Cost for two members : <?php echo$result['cost_for_2']?> </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <div id="News" class="tabcontent">
                    <div class="">
                    <div style="background-color: rgba(241, 241, 241, 0.552);">
                        <div class="m-5"></div>
                    </div>
                </div>
                </div>
                
                    <div id="About" class="tabcontent">
                        <div class="m-5">
                            <div>
                                <div>
                                    <div class="d-flex justify-content-center flex-wrap">
                                        <div class="">
                                            <img class="m-1" style="border-radius:10px; height:260px;" src="adminpanel/product_img/campus_exp/<?php echo$result['img'] ?>" onclick="openModal();currentSlide(1)">
                                        </div>
                                        <div class="">
                                            <img class="m-1" style="border-radius:10px; height:260px;" src="adminpanel/product_img/campus_exp/<?php echo$result['img1'] ?>" onclick="openModal();currentSlide(2)">
                                        </div>
                                        <div class="">
                                            <img class="m-1" style="border-radius:10px; height:260px;" src="adminpanel/product_img/campus_exp/<?php echo$result['img2'] ?>" onclick="openModal();currentSlide(3)">
                                        </div>
                                        <div class="">
                                            <img class="m-1" style="border-radius:10px; height:260px;" src="adminpanel/product_img/campus_exp/<?php echo$result['img3'] ?>" onclick="openModal();currentSlide(4)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>
    <script>
        function openPage(pageName, elmnt, color) {
            // Hide all elements with class="tabcontent" by default */
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Remove the background color of all tablinks/buttons
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }

            // Show the specific tab content
            document.getElementById(pageName).style.display = "block";

            // Add the specific color to the button used to open the tab content
            elmnt.style.backgroundColor = color;
            }

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
    </script>
    
   
    
    
</div>

<!-- body content end -->

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



<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    stagePadding: 40,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--image click to popup-->
<script src="js/lightbox.js"></script>

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