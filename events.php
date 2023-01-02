<?php
include("header1.php");
?>

<!-- page wrapper start -->

<div class="page-wrapper">

<!--page title start-->

<section class="page-title o-hidden pos-r md-text-center" data-bg-color="#d2f9fe">
  <div class="page-title-pattern topBottom" data-bg-img="images/bg/01.png"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12">
        <h1 class="title"><span>Events</span></h1>
        <p>This space is created for the very admired section of delhi university which is the trennial events in the university every year which are the most desired of being a delhi university students….</p>
      </div>
      <div class="col-lg-5 col-md-12 text-lg-right md-mt-3">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a>
            </li>
            <!-- <li class="breadcrumb-item">About Us
            </li> -->
            <li class="breadcrumb-item active" aria-current="page">Events</li>
          </ol>
        </nav>
      </div>
      <div class="post-categories mt-4">
            <a class="btn btn-theme mt-3" href="event_reg.php"> Register Your Event With Us </a>
        </div>
    </div>
  </div>
</section>



<!--page title end-->

<!--body content start-->

<div class="page-content">

<!--contact start-->


<!--blog start-->

<section>
  <div class="container">
    <div class="row align-items-center">

    
      <div class="col-lg-4 col-md-12">
        <div class="section-title">
          <h2 class="title">Latest <span>Events</span></h2>
          <div class="title-bdr">
              <div class="left-bdr"></div>
              <div class="right-bdr"></div>
          </div>
          
          <p>For students to develop their personality by organizing and participating in various events like debate, group discussion, mock stock which help in developing practical skills in a students and building up their holistic personality development…</p>
        </div>
        
        <div class="post-categories mt-4">
            <!--<a class="btn btn-theme mt-3" href="event_reg.php">Register Event With <br> Uncovercampus</a>-->
        </div>
      </div>
      <div class="col-lg-8 col-md-12">
        <div class="owl-carousel owl-center owl-nav2" data-dots="false" data-nav="true" data-items="2" data-md-items="2" data-sm-items="1" data-center="center" data-margin="30">
                <?php 
                    $query_top3=mysqli_query($conn,"SELECT * FROM events order by id DESC LIMIT 0,3");
                    while ($result=mysqli_fetch_array($query_top3)) {
                        
                  ?>
         
          <div class="item" >
              <a class="btn-simple mt-3" href="events_detail.php?id=<?php echo $result['id']?>">
            <div class="post">
              <div class="post-image">
                <img class="img-fluid h-100 w-100" src="adminpanel/product_img/event_imgs/<?php echo$result['event_img'] ?>" alt="">
              </div>
              <div class="post-desc">
                <div class="post-meta">
                  <ul class="list-inline">
                    <li><h5><i class="la la-calendar mr-1"></i> <?php echo $result['event_name'] ?> </li></h5>
                  </ul>
                </div>
                <div class="post-categories mt-4">
                    View more details
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




<!--event listing start-->
   
  
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                    <div class="section-title">
                        <h2 class="title">All <span>Events</span></h2>
                        <div class="title-bdr">
                            <div class="left-bdr"></div>
                            <div class="right-bdr"></div>
                        </div>
                        <p>Check out all the previous events out their</p>
                    </div>
                </div>
            </div>
            <div class="row">
        
            <?php
            // LIMIT 3,6
            $query_top3=mysqli_query($conn,"SELECT * FROM events order by id DESC ");
            while ($result=mysqli_fetch_array($query_top3)) {
            ?>
                
            <div class="col-lg-3 col-md-12 col-mt-6">
                <a class=" mt-3" href="events_detail.php?id=<?php echo $result['id']?>">
                    <div class="team-member shadow">
                        <div class="team-images" style="overflow:hidden">
                            <img class="img-fluid box-shadow" style="height:255px;" src="adminpanel/product_img/event_imgs/<?php echo$result['event_img'] ?>" alt="">
                        </div>
                        <div class="container my-3">      
                        <div class="post-desc" style="height: 120px;">
                            <div class="post-meta" style="background-color: #e5fbef;">
                                <ul>
                                    <h5><i class="la la-calendar text-center " ></i> <?php echo $result['event_name'] ?> </h5>
                                </ul>
                            </div>
                        <div class="post-categories my-auto text-center ">View more details</div>
                        </div>  
                    </div>
                </a>
            </div>
        </div>
    
        <?php
        } 
        ?>
        </div>
        </div>
    </section>
   
   
<!--event listing end -->

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