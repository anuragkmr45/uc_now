<?php
include("header1.php");
?>

<!--header end-->


<!--page title start-->

<section class="page-title o-hidden pos-r md-text-center" data-bg-color="#d2f9fe">
  <div class="page-title-pattern topBottom" data-bg-img="images/bg/01.png"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12">
        <h1 class="title"><span>Login</span></h1>
        <div class="title-bdr">
            <div class="left-bdr"></div>
            <div class="right-bdr"></div>
          </div>
      </div>
      <div class="col-lg-5 col-md-12 text-lg-right md-mt-3">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">Pages
            </li>
            <li class="breadcrumb-item active" aria-current="page">Login</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<!--page title end-->


<!--body content start-->

<div class="page-content">

<!--login start-->

<section class="login-2">
  <div class="container">
    <div class="row ">
      <div class="col-lg-6 col-md-12 mr-auto ml-auto md-mt-5">
        <div class="login-form text-center  box-shadow radius">
          <div class="px-5 py-5">
          <div class="section-title text-white">
          <h2 class="title text-black">Sign In</h2>
          <div class="title-bdr">
            <div class="left-bdr"></div>
            <div class="right-bdr"></div>
          </div>
          <p style="font-color:black;">Please enter you credentials</p>
        </div>          
          <form id="contact-form" method="post" action="">
            <div class="messages"></div>
            <div class="form-group">
              <input id="form_name" type="text" name="name" class="form-control" placeholder="User name" required="required" data-error="Username is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <input id="form_password" type="password" name="password" class="form-control" placeholder="Password" required="required" data-error="password is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group mt-4 mb-5">

            </div><a href="#" class="btn btn-theme text-uppercase"><span>Sign In</span></a>
          </form>     
          </div> 
          <h5 class="mb-0 mt-4 text-capitalize">Don't Have An Account ?<br> <a href="register.php">Sign Up!</a></h5>
        </div>
      </div>
    </div>
  </div>
</section>

<!--login end-->

<!--subscribe start-->

<!--subscribe end-->

</div>

<!--body content end--> 


<!--footer start-->
<div id="waterdrop"></div>
<footer class="footer theme-bg">
  <div class="primary-footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 col-md-6">
          <div class="footer-logo mb-3">
            <img id="footer-logo-white-img" src="images/navbar-logo2.png" class="img-center" alt="">
          </div>
          <p class="mb-0">Uncovercampus was started to provide students with a one stop solution for all the things which they need in their college, whether be it notes, assignment, guidance, accommodation, events, competitions or things to explore near your college. We got it all covered !</p>
          
        </div>
        <div class="col-lg-4 col-md-6 sm-mt-5">
          <h4 class="mb-4 text-white">Usefull link</h4>
          <div class="footer-list justify-content-between d-flex">
          <ul class="list-unstyled w-100">
            <li><a href="about.php">About Us</a>
            </li>
            <li><a href="college.php">Service</a>
            </li>
            <li><a href="#">Team</a>
            </li>
            <li><a href="#">Team Single</a>
            </li>
            <li><a href="contact.php">Contact Us</a>
            </li>
          </ul>
          <ul class="list-unstyled w-100">
            <li><a href="#">Blog</a>
            </li>
            <li><a href="#">Faq</a>
            </li>
            <!-- <li><a href="error-404.html">Error 404</a>
            </li> -->
            <li><a href="#">Privacy Policy</a>
            </li>
            <li><a href="#">Terms</a>
            </li>
          </ul>
        </div>
        </div>
        <div class="col-lg-4 col-md-12 md-mt-5">
          <div class="footer-cntct">
          <h4 class="mb-4 text-white">Get In Touch</h4>
          <ul class="media-icon list-unstyled">
            <li>
              <p class="mb-0"><i class="la la-map-o"></i>  <b>Malviya Nagar,Delhi</b>
              </p>
            </li>
            <li><i class="la la-envelope-o"></i>  <a href="info@uncovercampus.com"><b>info@uncovercampus.com</b></a>
            </li>
            <li><i class="la la-phone"></i>  <a href="tel:+91-8376008292"><b> +91-8376008292</b></a>
            </li>
            <li><i class="la la-phone"></i>  <a href="tel:+91-9717491074"><b> +91-9717491074</b></a>
            </li>
          </ul> 
          <div class="social-icons mt-3">
            <ul class="list-inline">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li><a href="#"><i class="fab fa-dribbble"></i></a>
              </li>
              <li><a href="#"><i class="fab fa-skype"></i></a>
              </li>
            </ul>
          </div>
          </div>         
        </div>
      </div>
    </div>
  </div>
  <div class="secondary-footer mt-5 text-center">
    <div class="container">
      <div class="copyright">
        <div class="row">
          <div class="col-md-12"> <span>Copyright 2021 UncoverCampus <u><a href="#"></a></u> | All Rights Reserved</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

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

</body>



</html>