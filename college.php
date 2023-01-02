<?php
include("header1.php");
?>

<!--search baar -->
<link rel="stylesheet" href="css/searchBaar.css">
    
<!--body content start-->

<div class="page-content">


<!--about start-->


<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="title text-center my-5">Find Colleges</h1>
                <h3 align="center" style="padding-bottom:20px;">Select College Campus Wise</h3>
                <div class="tab">
                    <div class="tab-content" id="nav-tabContent">
                        <div role="tabpanel" class="tab-pane fade show active" id="tab1-1">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <a href="college_north.php">
                                        <div class="featured-item style-4" style="text-align:center;">
                                            <div class="featured-icon"><i class="fas fa-university"></i>
                                            </div>
                                            <div class="featured-title">
                                                <h5>North Campus</h5>
                                            </div>
                                            <p><span>All Colleges Under North Campus</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <a href="college_south.php">
                                        <div class="featured-item style-4" style="text-align:center;">
                                            <div class="featured-icon"><i class="fa fa-graduation-cap"></i>
                                            </div>
                                            <div class="featured-title">
                                                <h5>South Campus</h5>
                                            </div>
                                            <p><span>All Colleges Under South Campus</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <a href="college_off.php">
                                        <div class="featured-item style-4" style="text-align:center;">
                                            <div class="featured-icon"><i class="fa fa-school"></i>
                                            </div>
                                            <div class="featured-title">
                                                <h5>Off Campus</h5>
                                            </div>
                                            <p><span>All Colleges Under Off Campus</p>
                                        </div>
                                    </a>
                                </div>
                                <!--<div class="col-lg-3 col-md-4 col-sm-6">-->
                                <!--    <a href="college_ipu.php">-->
                                <!--        <div class="featured-item style-4" style="text-align:center;">-->
                                <!--            <div class="featured-icon"><i class="las la-vials"></i>-->
                                <!--            </div>-->
                                <!--            <div class="featured-title">-->
                                <!--                <h5>IPU Campus</h5>-->
                                <!--            </div>-->
                                <!--            <p><span>All Colleges Under IPU Campus</p>-->
                                <!--        </div>-->
                                <!--    </a>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pos-r text-center">
  <div class="round-anim"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12 ml-auto mr-auto">
        <div class="section-title">
          <h2 class="title">Expore Every Possible <span>Need</span></h2>
          <!--<div class="title-bdr">-->
          <!--  <div class="left-bdr"></div>-->
          <!--  <div class="right-bdr"></div>-->
          <!--</div>-->
          <p>We at UncoverCampus provide every information one's seeks while getting into the college or between college days.Hope you find it all.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6 md-mt-5">
        <div class="featured-item style-5">
          <div class="featured-icon"> <i class="la la-institution"></i>
          </div>
          <div class="featured-title">
            <h5>Find Latest College</h5>
          </div>
          <p>Explore bestest Colleges in you country.</p>
          <p></p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 xs-mt-5">
        <div class="featured-item style-5">
          <div class="featured-icon"> <i class="las la-book-reader"></i>
          </div>
          <div class="featured-title">
            <h5>Explore Exams</h5>
          </div>
          <p>Here you get to know about upcoming Exams</p>
          <p></p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 sm-mt-5">
        <div class="featured-item style-5">
          <div class="featured-icon"> <i class="las la-envelope-open-text"></i>
          </div>
          <div class="featured-title">
            <h5>News Updates</h5>
          </div>
          <p>Stay updated about the latest news and happenings in colleges.</p>
          <p></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section style="background-color: rgba(240,245,251,0.45);border-top-left-radius: 50px;border-top-right-radius: 50px;">
  <div class="container">
      <div class="row text-center">
              <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                <div class="section-title">
                  <h2 class="title">Our Recommended<br> <span>Colleges</span></h2>
                  <!--<div class="title-bdr">-->
                  <!--  <div class="left-bdr"></div>-->
                  <!--  <div class="right-bdr"></div>-->
                  <!--</div>-->
                </div>
              </div>
            </div>
        <div class="col-md-12">
          <div class="job-search">
              <div class="">
                <div class="">
                  <div class="form-group mb-0">
                      <input id="searchbar" onkeyup="search_animal()" type="text" name="search" placeholder="Search College by Name or Location .">
                  </div>
                </div>
              </div>
          </div>
        </div>

            
            <div class="row" id="" >
        
             <?php
                    while ($result=mysqli_fetch_array($query_college)) {
            ?>
                
            <div class="col-lg-4 col-md-6 col-mt-5 my-4 animals" style="list-style: none;">
                <a href="college_info.php?id=<?php echo $result['id']?> ">
                    <div class="team-member featured-item">
                        <div class="team-images " style="overflow:hidden">
                             <img class="img-fluid box-shadow" style="height:250px;" src="adminpanel/product_img/college_finder/<?php echo$result['college_img'] ?>" alt="">
                        </div>
                        <div class="container my-3">      
                            <div class="post-desc" style="height: 120px;">
                                <div class="post-meta">
                                 <h5><i class="la la-institution"></i> <?php echo$result['college_name'];?></h5>
                                    <ul>
                                        <li class="social-facebook"> <?php echo$result['location'] ?></li>
                                    </ul>
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
    </section>

<section class="text-center">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-10 ml-auto mr-auto">
        <div class="section-title">
          <h2 class="title">Top Exams</h2>
          <!--<div class="title-bdr">-->
          <!--  <div class="left-bdr"></div>-->
          <!--  <div class="right-bdr"></div>-->
          <!--</div>-->
        </div>
      </div>
    </div>
    <div class="row">
      <?php
              while ($result_exams=mysqli_fetch_array($query_exams)) {
        ?>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="featured-item">
                <a href="exam_info.php?id=<?php echo $result_exams['id']?>">
              <div class="featured-title" style="text-align:left;">
                <h5 class="exam_u" ><?php echo$result_exams['exam_name'] ?></h5>
              </div>
              <div class="featured-desc" style="text-align:left;">
                <p><?php echo$result_exams['exam_details_short'] ?></p>
                <p style="color:blue; font-size:18px;">Read more..</p></a>
              </div>
            </div>
          </div>
      <?php
          }
        ?>
    </div>
  </div>
</section>



<!-- College listing session end -->

<section class="pb-0 z-index-1">
  <div class="round-anim center"></div>
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-10 ml-auto mr-auto">
        <div class="section-title">
          <h2 class="title">Enhance your <span>experience</span></h2>
          <!--<div class="title-bdr">-->
          <!--  <div class="left-bdr"></div>-->
          <!--  <div class="right-bdr"></div>-->
          <!--</div>-->
          <p>Enhance your experience just by registering with us.In few simple steps so we can provide you with you bestest consultation.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
                  <a href="register.php">
        <div class="box-shadow white-bg px-5 py-5 xs-px-1 xs=py-1 radius-lb radius-rt">
          <div class="row text-center">
            <div class="col-lg-4 col-md-12">
              <div class="featured-item">
                <div class="featured-icon">
                  <img src="images/customer.png" style="height:100px; width:100px">
                </div>
                <div class="featured-title">
                  <h5>Register with us.</h5>
                </div>
                <div class="featured-desc">
                  <p>Register with us so we can provide you Recommendation according to your needs.</p>
                </div>
              </div>
                </a>
            </div>
                  <a href="register.php">
            <div class="col-lg-4 col-md-12 md-mt-5">
              <div class="featured-item">
                <div class="featured-icon">
                  <img src="images/form.png" style="height:80px; width:80px">
                </div>
                <div class="featured-title">
                  <h5>Fill Form</h5>
                </div>
                <div class="featured-desc">
                  <p>By filling a basic form we will know what you want and display data according to your requirements.</p>
                </div>
              </div>
                </a>
            </div>
                  <a href="login.php">
            <div class="col-lg-4 col-md-12 md-mt-5">
              <div class="featured-item">
                <div class="featured-icon">
                  <img src="images/login.png" style="height:80px; width:80px">
                </div>
                <div class="featured-title">
                  <h5>Login</h5>
                </div>
                <div class="featured-desc">
                  <p>By doing so you can get some recommendations not only about colleges but also about events happening near your college and lot more. </p>
                </div>
              </div>
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- List Courses -->


</div>
</div>
<!--body content end--> 


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

<!--== search baar -->
<script src="js/searchBaar.js"></script>

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


