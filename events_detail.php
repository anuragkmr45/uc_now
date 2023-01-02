<?php
include("adminpanel/conn.php");
$event_id = $_GET['id'];
$query = mysqli_query($conn,"select * from events where id ='$event_id' ");
$result = mysqli_fetch_array($query);

$query_no_reg = mysqli_query($conn,"SELECT COUNT(DISTINCT expression) FROM event_stu_reg WHERE event = '$event';");	
$result_stu = mysqli_num_rows($query_no_reg);

include("header2.php");

?>

<!DOCTYPE html>
<html lang="en">



<head>
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
    
    
    <!--== social share buttons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--== color-customizer -->


    <!-- inject css end -->
    
    <style>
        .zoom {
            transition: transform .5s;
        }
            
            .zoom:hover {
                transform: scale(1.05);
                box-shadow: black;
        }
        
        @media (max-width: 1024px) {
            .spacing {
                display: flex;
                flex-direction: column;
                margin: 0px;
            }
            .display-flex-col{
                display: flex;
                flex-direction: column;
            }
            .sizing{
                height: 300px;
                width: fit-content;
            }
        }
        @media (max-width: 426px) {
            .spacing {
                display: flex;
                flex-direction: column;
                margin: 0px;
            }
            .display-flex-col{
                display: flex;
                flex-direction: column;
            }
            .sizing{
                height: 200px;
                width: fit-content;
            }
        }
        
        
     
    </style>
    
</head>

<body>
    
    
    
    <!-- page wrapper start -->

    <div class="page-wrapper"> 
        
       


    
    <div id="" class="" data-bs-ride="">
        <div class="">
            <div class="">
                <img src="adminpanel/product_img/event_imgs/event_posters/<?php echo$result['event_poster'] ?>" class="d-block w-100 sizing" alt="...">
            </div>
        </div>
    </div>
        
     
        
        
        <section>
            <div class="container display-flex-col" style= "display: flex; ">
            
            <div class=" container mt-3">
                    <div class="row d-flex align-item-center justify-content-center">
                        <div>
                            <img class="border border-success p-2" style="height: 250px; border-radius: 15px;" src="adminpanel/product_img/event_imgs/<?php echo$result['event_img'] ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8 my-auto ">
                            <div class="card-body m-0">
                                <h3 class="card-title  "><?php echo $result['event_name'] ?></h3>
                                <p class="card-text " style="font-size:20px;"><b>Conducted By</b> - <?php echo $result['society_name'] ?> <br> <?php echo $result['college_name'] ?></p>
                            </div>
                        </div>
                    </div>
            </div>
            
            <div class="post-categories m-auto">
                <div class="d-flex">
                        <!-- Trigger/Open The Modal -->
                            <a href="event_stu_reg.php?id=<?php echo $result['id']?>"><button class="btn btn-theme my-2 text-center" id="disab"><i class="fas fa-calendar-check "></i>  Register For This Event </button></a>
                <button type="button" class="btn btn-theme btn-sm mx-1 my-2" data-toggle="modal" data-target="#myModal"> <i class="fas fa-share-square"></i> Share </button>
                </div>
                <div class="card border-success m-auto d-flex justify-content-around">
                    
                
                    <!--<div class="mx-2 my-3 d-flex flex-column">-->
                    <!--    <div class="text-center"><i class="fas fa-address-card btn-lg" style="color: #353c5e;"></i></div>-->
                    <!--    <div class=" py-1 text-center" style="border-radius: 5px;"><?php echo $result_stu ?></div>-->
                    <!--    <div class="text-center d-flex flex-row align-item-center justify-content-around" style="color: #1f965b;"> Total Registration </div>-->
                    <!--</div>-->
                    
                    <div class="mx-2 my-3 d-flex flex-column">
                        <div class="text-center"><i class="fas fa-stopwatch btn-lg" style="color: #353c5e;"></i></div>
                        <div class=" py-1 text-center" style="border-radius: 5px;color: #1f965b;" id="demo"> </div>
                        <div class="text-center d-flex flex-row align-item-center justify-content-around" style="color: #1f965b;"> </div>
                    </div > 
                    
                    <!--<div class="mx-2 my-3 d-flex flex-column">-->
                        
                    <!--</div>-->
                </div>
            </div>

<script>
var n = localStorage.getItem('on_load_counter');

if (n === null) {
  n = 0;
}
n++;

localStorage.setItem("on_load_counter", n);

nums = n.toString().split('').map(Number);
document.getElementById('CounterVisitor').innerHTML = '';
for (var i of nums) {
  document.getElementById('CounterVisitor').innerHTML += '<span class="counter-item">' + i + '</span>';
}

</script>
        </section>
        
        
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center">Share this event to socials</h4>
                    </div>
                    <div class="modal-body mx-auto">
                        <div class="share-btn-container d-flex flex-column justify-content-around align-item-center"> 
                            <h4 style="color: #4267B2;"><a href="#" class="facebook-btn zoom" target="_blank" ><i class="fab fa-facebook btn-lg"></i> Facebook </a></h4>
                            <h4 style="color: #1DA1F2;"><a href="#" class="twitter-btn zoom" target="_blank"><i class="fab fa-twitter btn-lg"></i> Twitter </a></h4>
                            <h4 style="color: #8a3ab9;"><a href="#" class="instagram-btn zoom" target="_blank"><i class="fab fa-instagram btn-lg"></i> Instagram </a></h4>
                            <h4 style="color: #0e76a8;"><a href="#" class="linkedin-btn zoom" target="_blank"><i class="fab fa-linkedin btn-lg"></i> Linkedin </a></h4>
                            <h4 style="color: #34B7F1;"><a href="#" class="whatsapp-btn zoom" target="_blank"><i class="fab fa-whatsapp btn-lg"></i> Whatsapp </a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const facebookBtn = document.querySelector(".facebook-btn");
const twitterBtn = document.querySelector(".twitter-btn");
const instagramBtn = document.querySelector(".instagram-btn");
const linkedinBtn = document.querySelector(".linkedin-btn");
const whatsappBtn = document.querySelector(".whatsapp-btn");

function init() {
//   const pinterestImg = document.querySelector(".pinterest-img");

  let postUrl = encodeURI(document.location.href);
  let postTitle = encodeURI("Hi everyone, please check this out: ");
//   let postImg = encodeURI(pinterestImg.src);

  facebookBtn.setAttribute(
    "href",
    `https://www.facebook.com/sharer.php?u=${postUrl}`
  );

  twitterBtn.setAttribute(
    "href",
    `https://twitter.com/share?url=${postUrl}&text=${postTitle}`
  );

  instagramBtn.setAttribute(
    "href",
    `https://www.instagram.com/sharer.php?u=${postUrl}`
  );

  linkedinBtn.setAttribute(
    "href",
    `https://www.linkedin.com/shareArticle?url=${postUrl}&title=${postTitle}`
  );

  whatsappBtn.setAttribute(
    "href",
    `https://wa.me/?text=${postTitle} ${postUrl}`
  );
}

init();
        </script>
        
        
        <div class="py-4 mb-5" style="background-color: rgba(194, 255, 217, 0.458);">
            <div class="container" style="color:#2a8caa;">
                <div class=" spacing d-flex justify-content-around">
                    <div>
                        <p class="" ><i class="fas fa-calendar-week"></i> Deadline : <?php echo $result['reg_day'] ?> - <?php echo $result['reg_month'] ?> - <?php echo $result['reg_year'] ?>  <?php echo $result['reg_time'] ?>
                        <p class="d-inline"><i class="fas fa-user-friends"></i> Eligibility :  <div class=" d-inline border border-success p-1 px-3" style="border-radius:5px;"><?php echo $result['eligibility'] ?></div></p>
                        </div>
                    <div class="mx-1">
                        <p><i class="fas fa-map-marked-alt"></i> Region : <?php echo $result['region'] ?></p>
                        <p><i class="fas fa-university"></i> <?php echo $result['society_name'] ?> : <?php echo $result['about_society'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- table of content -->
        
        <!--<div class="container pt-5">-->
        <!--    <div class="row align-items-center">-->
        <!--        <div class="section-title">-->
        <!--            <h3 class="title"> Table Of Content </h3>-->
        <!--            <div class="title-bdr">-->
        <!--                <div class="left-bdr"></div>-->
        <!--                <div class="right-bdr"></div>-->
        <!--            </div>-->
        <!--            <div class="row">-->
        <!--                <div class="col-lg-12 col-md-12">-->
        <!--                    <div class="portfolio-filter">-->
        <!--                        <a href="#"><button class="is-checked" style="margin:12px;">All</button></a>-->
        <!--                        <a href="#event_name"><button class="" style="margin:12px;">Event Name</button></a>-->
        <!--                        <a href="#society"><button style="margin:12px;">Conducting Society</button></a>-->
        <!--                        <a href="#more_info"><button class="" style="margin:12px;">Event Description</button></a>-->
        <!--                        <a href="#last_registration"><button style="margin:12px;">Last Date to Register</button></a>-->
        <!--                        <a href="#reg_process"><button style="margin:12px;">How to Regsiter</button></a>-->
        <!--                        <a href="#contact"><button style="margin:12px;">Contact info</button></a>-->
                                <!--<a href="#"><button style="margin:12px;"> Faculty And-->
                                <!--        Infrastructure</button></a>-->
                                <!--<a href="#"><button style="margin:12px;"> Societies</button></a>-->
                                <!--<a href="#"><button style="margin:12px;">Food Quality</button></a>-->
        <!--                        <a href="#"><button style="margin:12px;">FAQs</button></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        
        
        
            <div id="more_info" class="m-1 zoom" style="background-color:rgba(241, 241, 241, 0.552); border-radius:10px;">
                <div class="  row align-items-center">
                    <div class=" container section-title text-center">
                        <h3 class="title"><i class="fas fa-calendar-week"></i> Description of Event : </h3>
                                
                        <div class="title-bdr">
                            <div class="left-bdr"></div>
                            <div class="right-bdr"></div>
                        </div>
                                
                            <p class="" style="padding-top:5px;font-size:16px;"><b><span>
                                <?php echo$result['more_info'];?>
                            </span></b></p>
                    </div>
                </div>
            </div>
        
            <div id="contact" class="m-1 zoom">
                <div class="row align-items-center">
                    <div class=" container section-title mx-auto">
                        <div class="text-center">
                            <h3 class="title"><i class="fas fa-id-card-alt"></i> Contact info : </h3>
                                
                            <div class="title-bdr ">
                                <div class="left-bdr"></div>
                                <div class="right-bdr"></div>
                            </div>
                        </div>
                                
                        <p class="text-center" style="padding-top:5px;font-size:16px;"><b><span>
                            <!--Email : <?php echo$result['email'];?><br>-->
                            Contact no : <a href="<?php echo$result['phone'];?>"><?php echo$result['phone'];?></a><br>
                        </span></b></p>
                    </div>
                </div>
            </div>
        
        
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
    
    
    <script type = "text/javascript" >
    
    
    
    // Set the date we're counting down to
var countDownDate = new Date("<?php echo $result['last_registration']?> ").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  if(days!= 0){
  document.getElementById("demo").innerHTML = days + "\ndays" + "\nLeft" ;
  }
  else if(days == 0){
      document.getElementById("demo").innerHTML = hours + "hours" + "\nLeft";
  }
  else if(hours == 0){
  document.getElementById("demo").innerHTML = minutes + "min" + "\nLeft";
  }

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Registration closed ";
    document.getElementById("disab").disabled = true;
    
  }
}, 1000);
    
    // 86400000
    
        


                        </script>
                        
        
 
    <!-- inject js start -->

    <!--== scrole indicator -->
    <!--<script src="js/scroleIndicator.js"></script>-->
    
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
        
    </div>
</body>
<!-- Global site tag (gtag.js) - Google Analytics START -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-979QL892R2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
    
        gtag('config', 'G-979QL892R2');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics END -->