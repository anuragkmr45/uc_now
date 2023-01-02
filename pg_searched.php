
<?php

include("adminpanel/conn.php");
$search_location=$_GET['search_location'];
$query=mysqli_query($conn,"select * from pg where location LIKE '%$search_location%'");						
$count=mysqli_num_rows($query);
include("header1.php");
?>


		<!--header end-->


<!--page title start-->

<section class="page-title o-hidden pos-r md-text-center" data-bg-color="#d2f9fe">
  <div class="page-title-pattern topBottom" data-bg-img="images/bg/01.png"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12">
        <h1 class="title"><span>PG</span> Finder</h1>
        <p>WE help you to find a perfect PG to stay near you,</p>
      </div>
      <div class="col-lg-5 col-md-12 text-lg-right md-mt-3">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">Services
            </li>
            <li class="breadcrumb-item active" aria-current="page">Pg finder</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>


<!--page title end-->


<!--body content start-->

<div class="page-content">



<!--counter start-->

<section class="grey-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="counter">
          <div class="counter-icon">
          <svg class="icon-vivus bd-color-1 feather feather-check-square" xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
        </div>
        <div class="counter-desc">
         <span class="count-number" data-to=" <?php echo $count; ?>" data-speed="900"> <?php echo $count; ?> </span>
          <h5>Available PG</h5>
        </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 sm-mt-5">
        <div class="counter">
          <div class="counter-icon">
          <svg class="icon-vivus bd-color-2 feather feather-users" xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
        </div>
        <div class="counter-desc">
        <span class="count-number" data-to="  <?php echo $count+1; ?>" data-speed="900">  <?php echo $count+1;  ?> </span>
          <h5>Member</h5>
        </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 md-mt-5">
        <div class="counter">
          <div class="counter-icon">
          <svg class="icon-vivus bd-color-1 feather feather-heart" xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
        </div>
        <div class="counter-desc">
        <span class="count-number" data-to=" <?php $count-2; ?>" data-speed="3000"> <?php $count-2; ?> </span>
          <h5>Love Us</h5>
        </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 md-mt-5 get_location" >
        <div class="counter">
          <div class="counter-icon">
          <svg class="icon-vivus bd-color-2 feather feather-smile" xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
        </div>
        <div class="counter-desc">
        <span >Search </span>
          <h5 class="hhh">Location</h5>
        </div>
        </div>
      </div>

    </div>
  </div>
</section>
<section style="padding:10px;display:none" class="serch_section">
  <div class="container" >
     
    <div class="row text-center">
      <div class="col-lg-11 col-md-11 ml-auto mr-auto">
        <div class="subscribe-form" >
          <form method="get" action="pg_searched.php" id="mc-form" class="group d-md-flex align-items-center">
            <input type="text" style="width: 100%;border: none;background: #ffffff;border-radius: 7px;color: #322f55;
             font-size: 14px;padding: 0 20px;height: 60px;-webkit-box-shadow: 0 8px 40px -5px rgb(9 31 67 / 10%);-moz-box-shadow: 0 8px 40px -5px rgba(9,31,67,.1);
            box-shadow: 0 8px 40px -5px rgb(9 31 67 / 10%);" value="" name="search_location"  class="email location_input" id="location_input" placeholder="Enter area,city" required="">
            <input class="btn btn-theme" type="submit" name="subscribe" value="Search">
            <input class="btn btn-theme" type="button" id="live_location" name="subscribe" onClick="getLocation()" value="Get my live location">
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<iframe class="map" id="map" style="height:450px;display:none" src="https://maps.google.com/maps?&hl=en&z=14&amp;output=embed" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>    
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script>
      $(document).ready(function(){
        $( '.get_location' ).click(function() {
            $( '.serch_section' ).toggle(1000);$( '.map' ).toggle(1000);
          });
      });
      var location_input=document.getElementById('location_input');

      function getLocation(){
          if(navigator.geolocation){
            navigator.geolocation. getCurrentPosition(showPosition);
                }
        else{location_input.value= "brouser not supportive";}
      }
      function showPosition(position){
        var lat=position.coords.latitude,
            long=position.coords.longitude,
            coords=lat+', '+long;
         document.getElementById('map').setAttribute('src','https://maps.google.com/maps?q='+ coords+'&hl=en&z=14&amp&output=embed' );}
          
      
      </script>


<!--counter end-->

<!--team start-->

<section>
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-10 ml-auto mr-auto">
        <div class="section-title">
          <h2 class="title">PGs near <span><?php echo $search_location?></span></h2>
          <div class="title-bdr">
            <div class="left-bdr"></div>
            <div class="right-bdr"></div>
          </div>
          <!-- <p>Powerfull Template customer service with our tools, hendrerit omittantur mel, es vidit Ius te omittantur meles vidit Ius te altera essent incorrupte.</p> -->
        </div>
      </div>
    </div>
    <div class="row">

        <?php
              while ($result=mysqli_fetch_array($query)) {
        ?>
      
              <div class="col-lg-4 col-md-12 mt-6">
                <div class="team-member style-3">
                  <div class="team-images" style="overflow:hidden">
                    <img class="img-fluid box-shadow" style="height:250px;" src="adminpanel/product_img/pg_finder/<?php echo$result['pg_img'] ?>" alt="">
                  </div>
                  <div class="team-description leftRight" >
                    <span>  <?php echo$result['location'] ?></span>
                    <h5 > <?php echo$result['pr_name'] ?></h5>
                    <div class="social-icons team-social-icon">
                      <ul>
                        <li class="social-facebook"> <?php echo "".$result['rent']."/month"?>
                        </li>
                        <li class="social-twitter"> <?php if($result['gender']=='female' or $result['gender']=='Female' ){ echo $result['gender'];}else{ echo "for ".$result['gender'];} ?>
                        </li>
                        <li class="social-gplus"> <?php echo $result['bed_no']." bed " ?>
                        </li>
                        
                      </ul>
                    </div>
                    <a class="btn-simple mt-3" href="pg_dtl.php?id=<?php echo $result['id']?> ">Read More</a>
                  </div>
                </div>
              </div>
      
           <?php
                } 
           ?>
    </div>
  </div>
</section>

<!--team end-->

<!--blog start-->

<section>
  <div class="container">
    <div class="row align-items-center">

    
      <div class="col-lg-4 col-md-12">
        <div class="section-title">
          <h2 class="title">Check Our  <span>best PGs</span></h2>
          <!-- <p>Powerfull Template customer service with our tools, hendrerit omittantur mel, es vidit Ius te omittantur meles vidit Ius te altera essent incorrupte.</p> -->
        </div>
      </div>
      <div class="col-lg-8 col-md-12">
        <div class="owl-carousel owl-center owl-nav2" data-dots="false" data-nav="true" data-items="2" data-md-items="2" data-sm-items="1" data-center="center" data-margin="30">
                <?php 
                    $query_top3=mysqli_query($conn,"SELECT * FROM pg order by rent DESC LIMIT 3");
                    while ($result=mysqli_fetch_array($query_top3)) {
                  ?>
         
          <div class="item">
            <div class="post">
              <div class="post-image">
                <img class="img-fluid h-100 w-100" src="adminpanel/product_img/pg_finder/<?php echo$result['pg_img'] ?>" alt="">
              </div>
              <div class="post-desc">
                <div class="post-meta">
                  <ul class="list-inline">
                    <li><i class="la la-calendar mr-1"></i> <?php echo $result['location'] ?> </li>
                    <li> <?php echo $result['rent']."/month" ?> </li>
                  </ul>
                </div>
                <div class="post-title ">
                  <h4><a href="pg_dtl.php?id=<?php echo $result['id']?> "> <?php echo $result['pr_name'] ?></a></h4>
                </div>
                <div class="post-categories mt-4">
                  <ul class="list-inline">
                    <li class="mt-2">    <?php echo $result['room_no']." room with ".$result['bed_no']." bed " ?>    </li>
                    <li class="mt-2">  <?php echo "for ".$result['gender'] ?>  </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
                      <?php
                    }
                    ?>

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