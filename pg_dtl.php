<?php

include("adminpanel/conn.php");
$id_from_pg=$_GET['id'];
$query=mysqli_query($conn,"select * from pg where id='$id_from_pg'");						
$count=mysqli_num_rows($query);
$result=mysqli_fetch_array($query);
include("header2.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="HTML5 Template" />
    <meta name="author" content="www.themeht.com" />
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
    
    <!--== scroler indicator -->
    <!--<link href="css/scroleIndicator.css" rel="stylesheet" type="text/css" />-->

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
    
    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>
      
      
      
      
<script src="css/lightbox.js"></script>
<style>

  *{
      text-decoration: none;
      list-style: none;
  }
  .text-deco{
      text-decoration: none;
      
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
  .img-cont{
    overflow: hidden;
  }

  .zoom {
    transition: transform .5s;
  }

  .zoom:hover {
    transform: scale(1.09);
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


  @media (max-width: 768px) {
      .disp-1{
          margin-top: 50px;
      }
      .disp-2{
          display:none;
      }
      .disp-3{
          display: flex;
          flex-direction: column;
      }
      .disp-5{
          text-align: center;
      }
      .icn{
          display: block;
          padding-top: 30px;
          padding-bottom: 30px;
          text-align: center;
          background-color: #edf3ff"
      }
  }
  
  
  @media (min-width: 768px) {
      .disp-1{
          display:none;
      }
      
  }
  
  @media (min-width: 426px) {
      .disp-4{
          height: 10px;
          width: 75%;
      }
      
  }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />




        
    
    
    <div class=" disp-1">
        <div class="container mt-5">
            <div class="owl-carousel owl-theme">
                <div class="item mx-1 img-cont">
                    <img id="myImg" class="zoom m-1" style="border-radius:10px;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-1'] ?>">
                </div>
                <div class="item mx-1 img-cont">
                    <img id="myImg" class="zoom m-1" style="border-radius:10px;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-2'] ?>">
                </div>
                <div class="item mx-1 img-cont">
                    <img id="myImg" class="zoom m-1" style="border-radius:10px;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-3'] ?>">
                </div>
                <div class="item mx-1 img-cont">
                    <img id="myImg" class="zoom m-1" style="border-radius:10px;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-4'] ?>">
                </div>
                <div class="item mx-1 img-cont">
                    <img id="myImg" class="zoom m-1" style="border-radius:10px;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-5'] ?>">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Images used to open the lightbox -->
    <div class="disp-2 mb-5 mx-auto" style="">
        <div class="d-flex justify-content-between">
            
            <div class="column img-cont" style="width: 50%;">
                <img style="width: 100%; height: 500px; margin:1px;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-1'] ?>" onclick="openModal();currentSlide(1)" class="zoom hover-shadow">
            </div>
            
            <div style="width: 100%;">
                <div class="d-flex">
                    <div class="column img-cont" style="width: 120%;">
                        <img style="width: 100%; height: 250px; margin:1px;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-2'] ?>" onclick="openModal();currentSlide(2)" class="zoom hover-shadow">
                    </div>
                    <div class="column img-cont" style="width: 120%;">
                        <img style="width: 100%; height: 250px; margin:1px;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-3'] ?>" onclick="openModal();currentSlide(3)" class="zoom hover-shadow">
                    </div>
                    <div class="column img-cont" style="width: 120%;">
                        <img style="width: 100%; height: 250px; margin:1px;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-5'] ?>" onclick="openModal();currentSlide(3)" class="zoom hover-shadow">
                    </div>
                </div>
            
                <div class="d-flex">
                    <div class="column img-cont" style="width: 120%;">
                        <img style="width: 100%; height: 250px; margin:1px;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-4'] ?>" onclick="openModal();currentSlide(4)" class="zoom hover-shadow">
                    </div>
  
                    <div class="column img-cont" style="width: 120%;">
                        <img style="width: 100%; height: 250px; margin:1px;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-5'] ?>" onclick="openModal();currentSlide(4)" class="zoom hover-shadow">
                    </div>
                    <div class="column img-cont" style="width: 120%;">
                        <img style="width: 100%; height: 250px; margin:1px;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-1'] ?>" onclick="openModal();currentSlide(4)" class="zoom hover-shadow">
                    </div>
                </div>
            </div>
        </div>

        <!-- The Modal/Lightbox -->
        <div id="myModal" class="modal">
            <span class="close cursor" style="cursor: pointer;" onclick="closeModal()">&times;</span>
            <div class="modal-content" style="background-color: #343232eb;">

                <div class="m-auto mySlides" >
                    <div class="numbertext"></div>
                        <img style="width: 90vh; height:90vh;background-color: black;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-1'] ?>" style="width:100%">
                </div>

                <div class="m-auto mySlides">
                    <div class="numbertext"></div>
                    <img style="width: 90vh; height:90vh;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-2'] ?>" >
                </div>

                <div class="m-auto mySlides">
                    <div class="numbertext"></div>
                    <img style="width: 90vh; height:90vh;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-3'] ?>" >
                </div>

                <div class="m-auto mySlides">
                    <div class="numbertext"></div>
                    <img style="width: 90vh; height:90vh;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-4'] ?>" >
                </div>
    
                <div class="m-auto mySlides">
                    <div class="numbertext"></div>
                    <img style="width: 90vh; height:90vh;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-5'] ?>" >
                </div>

                <!-- Next/previous controls -->
                <div class="d-flex justify-content-center" style="cursor: pointer;">
                    <a class="prev btn-lg" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next btn-lg" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <!-- Caption text -->
                <div class="caption-container" style="cursor: pointer;">
                    <p id="caption" style="cursor: pointer;"></p>
                </div>

                <!-- Thumbnail image controls -->
                <!--<div class="d-flex justify-content-around">-->
                <!--    <div class="column">-->
                <!--    <img style="height:120px;" class="demo" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-1'] ?>" onclick="currentSlide(1)" alt="">-->
                <!--</div>-->

                <!--<div class="column">-->
                <!--    <img style="height:120px;" class="demo" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-2'] ?>" onclick="currentSlide(2)" alt="">-->
                <!--</div>-->

                <!--<div class="column">-->
                <!--    <img style="height:120px;" class="demo" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-3'] ?>" onclick="currentSlide(3)" alt="">-->
                <!--</div>-->

                <!--<div class="column">-->
                <!--    <img style="height:120px;" class="demo" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-4'] ?>" onclick="currentSlide(4)" alt="">-->
                <!--</div>-->
    
                <!--<div class="column">-->
                <!--    <img style="height:120px;" class="demo" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-5'] ?>" onclick="currentSlide(5)" alt="">-->
                <!--</div>-->
            </div>
        </div>
        </div>
</div>
    
    
   
   

<!--page title end-->



<!--body content start-->

<div class="page-content">
  <div class="container">
    <div class="d-flex disp-3">
      <div class="col-lg-7 col-md-10">
        <div class="team-description">
          <div class="">
            <h2>
              <?php echo$result['pr_name']?>
            </h2>
            <h6 class="text-theme"><i class='fas fa-map-marker-alt'></i>
              <?php echo$result['location']?>
            </h6>
          </div>
          <div class="p-3" style="background-color: rgba(194, 255, 217, 0.458);">
            <h5> <i class="fas fa-money-check-alt"></i> Rent :
              <?php echo$result['rent']?> /-
            </h5>
            <h5>Room Facilities :
              <?php echo$result['room_facilities']?>
            </h5>
            <p class="lead mb-3 text-black">Owner of <b>
                <?php echo$result['pr_name']?>
              </b>, <b>
                <?php echo$result['owner_name']?>
              </b> is providing <b style="color:#03d665">
                <?php echo$result['room_no']?> room with
                <?php echo$result['bed_no']?> bed
              </b>.
          </div>
          <div class="container mt-5 disp-3">
        <div class="my-3">
            <h5>Nearest metro station <br><br> <span class="text-success" style="list-styling: none; text-decoration: none;"><a class="text-deco" href="<?php echo$result['map_link']?>" target="_blank"><?php echo$result['metro_station']?></a></span></h5>
        </div>
        <div class="mt-5">
            <h5>Popular landmarks nearby</h5><br>
             - <?php echo$result['popular_landmark-1']?><br>
             - <?php echo$result['popular_landmark-2']?><br>
             - <?php echo$result['popular_landmark-3']?><br>
         </div>
    </div>
        </div>
      </div>
      
      <div>
        <?php

include('adminpanel/conn.php');
if(!$conn)
{
	die("connection faied".mysqli_connect_error());
}
else{
}

if(isset($_POST['submit']))
{
 $society_name=$result['pr_name'];
 $name=$_POST['name'];
 $college=$_POST['college'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];

 $query="insert into pg_contact(pr_name,name,college,email,phone) values('$society_name','$name','$college','$email','$phone')";
 $data=mysqli_query($conn,$query);
 
 if($data){
    echo '<script> swal("Success","We will get in touch with you soon");
    </script>';
}
else{
   echo '<script> swal("Something went wrong", "plz try again", "error");
  </script>';
}
}
?>

        <div class="container p-5 " style="background-color: rgba(245,250,254,260);">
          <h5 class="text-center"> Bookings a visit to
            <?php echo$result['pr_name']?>
          </h5>
          <form method="post">

            <div class="mb-3">
              <input type="text" name="name" class="form-control" id="exampleInputText1 validationDefault01"
                aria-describedby="textHelp" placeholder=" Name" required="required">

            </div>

            <div class="mb-3">
              <input type="text" name="college" class="form-control" id="exampleInputText1" aria-describedby="textHelp"
                placeholder=" College " required="required">

            </div>

            <div class="mb-3">
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Email address" required="required">

            </div>

            <div class="mb-3">
              <input type="phone" name="phone" class="form-control" id="exampleInputPhone1" placeholder="Contact number"
                required="required">
            </div>


            <div class="text-center py-5">
              <button type="reset" class="btn btn-theme" data-bs-dismiss="modal">Reset</button>
              <!--<button type="submit" class="btn btn-theme" value="Submit">Submit</button>-->
              <button type="submit" id="submit" name="submit" class="btn btn-border btn-theme">Submit</button>
            </div>
          </form>


        </div>
      </div>
    </div>
  </div>


    <div class="container">
        <h4 class="m-2 text-center">Room facilities</h4>
        <div class="row">
            <div class="col-6 col-md-3"><h6 class="disp-5" style="color:#369c70;"> <i  class="p-3 icn fas fa-home" style="background-color: rgba(194, 255, 217, 0.458);border-radius: 5px; padding: 8px;"></i> Attached Balcony</h6></div>
            <div class="col-6 col-md-3"><h6 class="disp-5" style="color:#369c70;"> <i  class="p-3 icn fas fa-restroom" style="background-color: rgba(194, 255, 217, 0.458); border-radius: 5px; padding: 8px;"></i> Attached Washroom</h6></div>
            <div class="col-6 col-md-3"><h6 class="disp-5" style="color:#369c70;"> <i  class="p-3 icn fas fa-bed" style="background-color: rgba(194, 255, 217, 0.458); border-radius: 5px; padding: 8px;"></i> Bed with Mattress</h6></div>
            <div class="col-6 col-md-3"><h6 class="disp-5" style="color:#369c70;"><i  class="p-3 icn fas fa-fan" style="background-color: rgba(194, 255, 217, 0.458); border-radius: 5px; padding: 8px;"></i> Ceiling Fans</h6></div>
            <div class="col-6 col-md-3"><h6 class="disp-5" style="color:#369c70;"> <i  class="p-3 icn fas fa-shower" style="background-color: rgba(194, 255, 217, 0.458); border-radius: 5px; padding: 8px;"></i> Hot Water Supply</h6></div>
            <div class="col-6 col-md-3"><h6 class="disp-5" style="color:#369c70;"> <i class="p-3 icn far fa-window-maximize" style="background-color: rgba(194, 255, 217, 0.458); border-radius: 5px; padding: 8px;"></i> Sliding Window</h6></div>
            <div class="col-6 col-md-3"><h6 class="disp-5" style="color:#369c70;"> <i  class="p-3 icn fas fa-memory" style="background-color: rgba(194, 255, 217, 0.458); border-radius: 5px; padding: 8px;"></i> Spacious Cupboard</h6></div>
            <div class="col-6 col-md-3"><h6 class="disp-5" style="color:#369c70;"> <i  class="p-3 icn fas fa-chair" style="background-color: rgba(194, 255, 217, 0.458); border-radius: 5px; padding: 8px;"></i> Study Table & Chair</h6></div>
            <div class="col-6 col-md-3"><h6 class="disp-5" style="color:#369c70;"> <i  class="p-3 icn far fa-lightbulb" style="background-color: rgba(194, 255, 217, 0.458); border-radius: 5px; padding: 8px;"></i> Tubelight / LED</h6></div>
            <div class="col-6 col-md-3"><h6 class="disp-5" style="color:#369c70;"> <i  class="p-3 icn fab fa-bitbucket" style="background-color: rgba(194, 255, 217, 0.458); border-radius: 5px; padding: 8px;"></i> Well placed Dustbins</h6></div>
        </div>
    </div>
    
    
    
    <div class="container">
        <h4 class="m-2 text-center">Amenities and Services</h4>
        <div class="row">
            <div class="col-6 col-md-3"><h6 class="disp-5" style="color:#369c70;"> <i  class="p-3 icn fas fa-video" style="background-color: rgba(194, 255, 217, 0.458); border-radius: 5px; padding: 8px;"></i> Security Surveillance</h6></div>
            <div class="col-6 col-md-3"><h6 class="disp-5" style="color:#369c70;"> <i  class="p-3 icn fas fa-wifi" style="background-color: rgba(194, 255, 217, 0.458); border-radius: 5px; padding: 8px;"></i> Attached Washroom</h6></div>
            <div class="col-6 col-md-3"><h6 class="disp-5" style="color:#369c70;"> <i  class="p-3 icn fas fa-bed" style="background-color: rgba(194, 255, 217, 0.458); border-radius: 5px; padding: 8px;"></i> High-Speed WIFI</h6></div>
            <div class="col-6 col-md-3"><h6 class="disp-5" style="color:#369c70;"> <i  class="p-3 icn fas fa-shower" style="background-color: rgba(194, 255, 217, 0.458); border-radius: 5px; padding: 8px;"></i> Hot Water Supply</h6></div>
            <!--<div class="col-6 col-md-3"><h6 class="disp-5" style="color:#369c70;"> <i class="p-3 icn fas fa-soap" style="background-color: rgba(194, 255, 217, 0.458); border-radius: 5px; padding: 8px;"></i> Laundry Service</h6></div>-->
            <div class="col-6 col-md-3"><h6 class="disp-5" style="color:#369c70;"> <i class="p-3 icn fas fa-utensils" style="background-color: rgba(194, 255, 217, 0.458); border-radius: 5px; padding: 8px;"></i> Delicious Meals</h6></div>
            <div class="col-6 col-md-3"><h6 class="disp-5" style="color:#369c70;"> <i  class="p-3 icn fas fa-bolt" style="background-color: rgba(194, 255, 217, 0.458); border-radius: 5px; padding: 8px;"></i> Power Backup</h6></div>
            <div class="col-6 col-md-3"><h6 class="disp-5" style="color:#369c70;"> <i  class="p-3 icn fas fa-male" style="background-color: rgba(194, 255, 217, 0.458); border-radius: 5px; padding: 8px;"></i> Housekeeping</h6></div>
            <div class="col-6 col-md-3"><h6 class="disp-5" style="color:#369c70;"> <i  class="p-3 icn far fa-lightbulb" style="background-color: rgba(194, 255, 217, 0.458); border-radius: 5px; padding: 8px;"></i> Tubelight / LED</h6></div>
            <div class="col-6 col-md-3"><h6 class="disp-5" style="color:#369c70;"> <i class="p-3 icn fas fa-dumbbell" style="background-color: rgba(194, 255, 217, 0.458); border-radius: 5px; padding: 8px;"></i> Workout Zone</h6></div>
        </div>
    </div>
    

    

<section>
    <div class="container text-center">
        <div class="my-auto">
            <div class="container mt-5">
        <div class="owl-carousel owl-theme">
            <div class="item mx-1">
                <video style="border-radius:15px;" class="zoom" width="350" height="350" controls><source src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_video'] ?>"type="video/mp4">
                </video>
            </div>
            <div class="item mx-1">
                    <img id="myImg" class="zoom m-1" style="border-radius:10px;height: 350px;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-1'] ?>">
            </div>
            <div class="item mx-1">
                    <img id="myImg" class="zoom m-1" style="border-radius:10px;height: 350px;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-2'] ?>">
            </div>
            <div class="item mx-1">
                    <img id="myImg" class="zoom m-1" style="border-radius:10px;height: 350px;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-3'] ?>">
            </div>
            <div class="item mx-1">
                    <img id="myImg" class="zoom m-1" style="border-radius:10px;height: 350px;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-4'] ?>">
            </div>
            <div class="item mx-1">
                    <img id="myImg" class="zoom m-1" style="border-radius:10px;height: 350px;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-5'] ?>">
            </div>
        </div>
    </div>
        </div>
    </div>
</section>



  <!--team details end-->
</div>

<!--body content end-->


<!--footer start-->

<script src="footer.js"></script>

<!--footer end-->

</div>

<!-- page wrapper end -->


<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:true
        }
        1000:{
            items:1,
            nav:true
        }
    }
    
    
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="la la-hand-pointer-o"></i></a></div>

<!--back-to-top end-->


<!-- inject js start -->

<!--image carousel-->
<script>
  const buttons = document.querySelectorAll("[data-carousel-button]")

  buttons.forEach(button => {
    button.addEventListener("click", () => {
      const offset = button.dataset.carouselButton === "next" ? 1 : -1
      const slides = button
        .closest("[data-carousel]")
        .querySelector("[data-slides]")

      const activeSlide = slides.querySelector("[data-active]")
      let newIndex = [...slides.children].indexOf(activeSlide) + offset
      if (newIndex < 0) newIndex = slides.children.length - 1
      if (newIndex >= slides.children.length) newIndex = 0

      slides.children[newIndex].dataset.active = true
      delete activeSlide.dataset.active
    })
  })
</script>

<!--image click to popup-->
<script src="js/lightbox.js"></script>

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

      
      
      
      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>


