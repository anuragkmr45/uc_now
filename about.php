<?php
error_reporting(0);
include("header1.php");
$conn=mysqli_connect("localhost","u808479902_uc","Uncover12","u808479902_uncovercampus");
$query=mysqli_query($conn,"select * from team");
$result=mysqli_fetch_array($query);

?>
<style>
    .rev-color:hover{
        background-color: #03d665;
        color: white;
        border: none;
        /*filter: invert(100%);*/
    }
    
</style>
<!--body content start-->

<div class="page-content">
    
    <!--member listing start-->

    <section class="mt-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                    <div class="section-title mx-auto">
                        <h2 class="title">Our Team </h2>
                        <div class="title-bdr">
                            <div class="left-bdr"></div>
                            <div class="right-bdr"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
        
            <?php
            $query_top3=mysqli_query($conn,"SELECT * FROM team ");
            while ($result=mysqli_fetch_array($query_top3)) {
            ?>
                
            <div class="col-lg-4 col-md-6 col-mt-6 m-auto featured-item">
                <div class="">
                    <div class="team-member mx-auto" style="border-radius: 5px; width: 280px; margin-top: 60px ;margin-bottom: 60px;">
                        <div class="team-images text-center" style="overflow:hidden;">
                            <img class="img-fluid box-shadow rounded-circle mx-auto my-0"  style="height: 200px;width: 200px; border-top-left-radius: 20px; border-top-right-radius: 10px; z-index: -1;" src="about_img/<?php echo$result['photo'] ?>" alt="">
                        </div>
                        <div class="container" >      
                            <div class="post-desc my-0" style="height: 150px;">
                                <div class="post-meta ">
                                    <ul class="text-center" >
                                        <li class="px-2 pt-2" style="border-radius:20px;"><h5><i class="text-center " ></i> <?php echo $result['name'] ?> </h5>
                                        <h5><i class="text-center " ></i> <?php echo $result['designation'] ?> </h5>
                                        <p><i class="text-center " ></i> <?php echo $result['college'] ?> </p>
                                        <h2 ><a class="" href="<?php echo $result['linkedin']?>" target="_blank"><i class='fab fa-linkedin-in btn-lg border border-success rev-color' ></i></a></h2></li>
                                    </ul>
                                </div>
                            </div>  
                    </div>
                </div>
            </div>
        </div>
    

        <?php
        } 
        ?>
        </div>
        </div>
    </section>
   
    
<!--member listing end -->


<section class="text-center">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-10 col-md-12 ml-auto mr-auto">
        <div class="section-title">
          <h3 class="title line-h-3">Uncovercampus was started to provide students with a one stop solution for all the things which they need in their college, whether be it notes, assignment, guidance, accommodation, events, competitions or things to explore near your college. We got it all covered!!!</h3>
          <p></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="featured-item">
          <div class="featured-icon"> <i class="la la-certificate"></i>
          </div>
          <div class="featured-title">
            <h5>Our Mission</h5>
          </div>
          <div class="featured-desc">
            <p>With the most interactive user interface and most validated content, we aspire to be one of the top education portals and help the students in every way in making his decision easier.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 sm-mt-5">
        <div class="featured-item">
          <div class="featured-icon"> <i class="la la-lightbulb-o"></i>
          </div>
          <div class="featured-title">
            <h5>Our vision</h5>
          </div>
          <div class="featured-desc">
            <p>UncoverCampus has been created to fulfill a vision of empowering students with knowledge so that they make a wiser decision while choosing their career.</p>
          </div>
        </div>
      </div>
      
      
      
    <!--  <div class="row">-->
    <!--      <div class="column">-->
    <!--          <div class="card style="width:50%"">-->
    <!--              <img src="" alt="" >-->
    <!--              <div class="container">-->
    <!--    `           <h2></h2>-->
    <!--                <p class="title">CEO &amp; Founder</p>-->
    <!--                <p>Some text that describes </p>-->
    <!--                <a href="vidite@uncovercampus.com"><p>vidite@uncovercampus.com</p></a>-->
                    <!--<p><button class="button">Contact</button></p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
      
      
      <div class="row">
        <div class="section-title ml-auto mr-auto" style="margin-top:15px;margin-bottom:0px;">
          <h2 class="title">Our Story</h2>
          <div class="title-bdr">
            <div class="left-bdr"></div>
            <div class="right-bdr"></div>
          </div>
        </div>
        <div class="container">
        <div class="col-md-12">
          <p style="font-size:18px;text-align:justify"><b><span>Launched in 2021, uncovercampus is a forerunner in its field, initiated by students of Delhi University  after experiencing all the inconvenience they faced to access all the necessary information about their colleges. We realized that this matter could be solved by bringing students on one convenient platform where they could access all the information they will require in their college life.</span></b></p>
          </div>
          </div>
      </div>
      
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="featured-item">
          <div class="featured-icon"> <i class="la la-book"></i>
          </div>
          <div class="featured-title">
            <h5>UncoverCampus For Students</h5>
          </div>
          <div class="featured-desc">
            <p>Students can use UncoverCampus.com to search about their dream college, courses, admission process and lots more. The website has the repository of many colleges and courses categorized in different streams like Management, Engineering, Medical, Arts and much more. One can classify colleges on the basis of location, ranking, ratings, fees and cutoff for different competitive exams.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="featured-item">
          <div class="featured-icon"> <i class="la la-institution"></i>
          </div>
          <div class="featured-title">
            <h5>Uncover For Institutions</h5>
          </div><br>
          <div class="featured-desc">
            <p>UncoverCampus.com provides a non-conventional platform which focuses on delivering quality leads to enable them for collecting highly motivated candidates. The algorithm for data segregation in the website allows us to segregate the data up to multiple levels, providing an edge to the clients looking for highly specific and active database.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="featured-item">
          <div class="featured-icon"> <i class="la la-users"></i>
          </div>
          <div class="featured-title">
            <h5>UncoverCampus For Parents</h5>
          </div>
          <div class="featured-desc">
            <p>The website preferable addresses the concerns of parents looking for an ideal institute for their wards. It provides a multichannel filter page which sorts data on the basis of ranking, fees and cutoff. We have a highly skilled team of data miners who can present data in the most interactive allowing you to make decisions in the most informative way.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--about start-->

<section class="pos-r bg-contain bg-pos-lb" data-bg-img="images/bg/06.png">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
        <img class="img-center" src="images/about/11.svg" alt="">
      </div>
      <div class="col-lg-6 col-md-12 md-mt-5">
        <div class="section-title">
          <h2 class="title">Read More About <span>UncoverCampus</span></h2>
          <div class="title-bdr">
            <div class="left-bdr"></div>
            <div class="right-bdr"></div>
          </div>
        </div>
       <p class="lead text-black">Uncovercampus helps you to<br>
        • Find you a College<br>
        • Explorer the Campus<br>
        • Find you a perfect PG<br>
        • Explorer Events<br>
        • Academics .</p>
          <p>Launched in 2021, We are a forerunner in its field, initiated by students of Delhi University after experiencing all the inconvenience they faced to access all the necessary information about their colleges. We realized that this matter could be solved by bringing students on one convenient platform where they could access all the information they will require in their college life...</p>
          <!-- <a class="btn btn-theme btn-circle" href="#"><span>Try It Free</span></a> -->
        <a class="btn btn-theme btn-circle" href="contact.php"><span>Contact Us</span></a>
      </div>
    </div>
  </div>
</section>

<!--about end-->





<!--footer start-->

		<script src="footer.js"></script>

<!--footer end-->


</div>


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