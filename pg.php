<?php
include("header1.php");
$query=mysqli_query($conn,"select * from pg where status='on'");						
$count=mysqli_num_rows($query);
?>



		<!--header end-->

<!--search baar -->
<link rel="stylesheet" href="css/searchBaar.css">

<!--page title start-->

<section class="page-title o-hidden pos-r md-text-center" data-bg-color="#d2f9fe">
  <div class="page-title-pattern " data-bg-img="images/bg/01.png"></div>
  <div class="container">
    <div class="text-center">
        <h1>Accommodation Near Your College</h1>
    </div>
  </div>
</section>


<!--page title end-->


<!--body content start-->

<div class="page-content">
    

<!--counter start-->


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

<!--blog start-->

<section>
  <div class="container">
    <div class="row align-items-center">

    
      <div class="col-lg-4 col-md-12">
        <div class="section-title">
          <h2 class="title">Check Our  <span>best PGs</span></h2>
          <p>Delhi university has quite a large number of students migrating from different parts of the nation and even foreign students where majority of population faces a lot of issues related to food, 24/7 security along with vigilant community managers and proper network connections. For this purpose we have proper PG recommendations which will help you further.</p>
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
                        <a href="pg_dtl.php?id=<?php echo $result['id']?> ">
                      <div class="post-image">
                        <img class="m-1" style="width: 80vh;height: 40vh;" src="adminpanel/product_img/pg_finder/<?php echo$result['pr_name'] ?>/<?php echo$result['pg_img-1'] ?>">
                      </div>
                      <div class="post-desc">
                        <div class="post-meta">
                          <ul class="list-inline">
                            <li><i class="la la-calendar mr-1"></i> <?php echo $result['location'] ?> </li>
                            <li> <?php echo $result['rent']."/month" ?> </li>
                          </ul>
                        </div>
                        <div class="post-title ">
                          <h4> <?php echo $result['pr_name'] ?></h4>
                        </div>
                        <div class="post-categories mt-4">
                          <ul class="list-inline">
                            <li class="mt-2">    <?php echo $result['room_no']." room with ".$result['bed_no']." bed " ?>    </li>
                            <li class="mt-2">  <?php echo "for ".$result['gender'] ?>  </li>
                          </ul>
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
    </div>
  </div>
</section>

<!--blog end-->

<!--team start-->

<section>
        <div class="container">
            <div class="row text-center">
                    <div class="section-title mx-auto">
                        <h3 align="center">Accommodation Near Your College</h3>
                            <div class="job-search">
                                <div class="">
                                    <div class="">
                                      <div class="form-group mb-0">
                                          <input id="searchbar" onkeyup="search_animal()" type="text" name="search" placeholder="Search College by Name/ Location / Category...">
                                      </div>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
            <div class="row">
        
             <?php
                    $query_top4=mysqli_query($conn,"SELECT * FROM pg order by id desc");
                    while ($result4=mysqli_fetch_array($query_top4)) {
            ?>
                
            <div class="col-lg-4 col-md-6 col-mt-5 my-4 animals" style="list-style: none;">
                <a href="pg_dtl.php?id=<?php echo $result4['id']?> ">
                    <div class="team-member shadow" style="border-radius: 5px;">
                        <div class="team-images" style="overflow:hidden">
                             <img class="m-auto" style="width: 100%;height: 40vh;" src="adminpanel/product_img/pg_finder/<?php echo $result4['pr_name'] ?>/<?php echo $result4['pg_img-1'] ?>">
                        </div>
                        <div class="container my-3">      
                        <div class="post-desc" style="height: 120px;">
                            <div class="post-meta">
                                
                            <span>  <?php echo $result4['location'] ?></span>
                             <h5 > <?php echo $result4['pr_name'] ?></h5>
                                <ul>
                                    <li class="social-facebook"> <?php echo "".$result4['rent']."/month"?></li>
                                    <li class="social-twitter"> <?php if($result4['gender']=='female' or $result4['gender']=='Female' ){ echo $result4['gender'];}else{ echo "for ".$result4['gender'];} ?></li>
                                    <li class="social-gplus"> <?php echo $result4['bed_no']." bed " ?></li>
                                </ul>
                            </div>
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

<!--team end-->



</div>



<!--<section class="grey-bg">-->
<!--  <div class="container">-->
<!--    <div class="row">-->
<!--      <div class="col-lg-4 col-md-6">-->
<!--        <div class="counter">-->
<!--          <div class="counter-icon">-->
<!--          <svg class="icon-vivus bd-color-1 feather feather-check-square" xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>-->
<!--        </div>-->
<!--        <div class="counter-desc">-->
<!--         <span class="count-number" data-to=" <?php echo $count; ?>" data-speed="900"> <?php echo $count; ?> </span>-->
<!--          <h5>Available PG</h5>-->
<!--        </div>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="col-lg-4 col-md-6 sm-mt-5">-->
<!--        <div class="counter">-->
<!--          <div class="counter-icon">-->
<!--          <svg class="icon-vivus bd-color-2 feather feather-users" xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>-->
<!--        </div>-->
<!--        <div class="counter-desc">-->
<!--        <span class="count-number" data-to="  <?php echo $count+1; ?>" data-speed="900">  <?php echo $count+1;  ?> </span>-->
<!--          <h5>Member</h5>-->
<!--        </div>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="col-lg-4 col-md-6 md-mt-5">-->
<!--        <div class="counter">-->
<!--          <div class="counter-icon">-->
<!--          <svg class="icon-vivus bd-color-1 feather feather-heart" xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>-->
<!--        </div>-->
<!--        <div class="counter-desc">-->
<!--        <span class="count-number" data-to=" <?php $count-2; ?>" data-speed="3000"> <?php $count-2; ?> </span>-->
<!--          <h5>Love Us</h5>-->
<!--        </div>-->
<!--        </div>-->
<!--      </div>-->
      <!--<div class="col-lg-3 col-md-6 md-mt-5 get_location" >-->
      <!--  <div class="counter">-->
      <!--    <div class="counter-icon">-->
      <!--    <svg class="icon-vivus bd-color-2 feather feather-smile" xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>-->
      <!--  </div>-->
      <!--  <div class="counter-desc">-->
      <!--  <span >Search </span>-->
      <!--    <h5 class="hhh">Location</h5>-->
      <!--  </div>-->
      <!--  </div>-->
      <!--</div>-->

<!--    </div>-->
<!--  </div>-->
<!--</section>-->

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

<!--== search baar -->
<script src="js/searchBaar.js"></script>

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