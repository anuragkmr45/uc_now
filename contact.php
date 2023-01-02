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
        <h1 class="title"><span>Contact</span> Us</h1>
        <p>We Caters All The Needs Of The College Students.</p>
      </div>
      <div class="col-lg-5 col-md-12 text-lg-right md-mt-3">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a>
            </li>
            <!-- <li class="breadcrumb-item">About Us
            </li> -->
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<!--page title end-->

<!--body content start-->

<div class="page-content">

<!--contact start-->

<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12 col-md-12">
        <ul class="contact-media style-2 list-unstyled mt-5">
          <li class="media"> <i class="la la-map-o"></i>
            <div class="media-body">
              <h5>Address</h5>
              <p>Malviya Nagar,Delhi</p>
            </div>
          </li>
          <li class="media"><i class="la la-envelope-o"></i> 
            <div class="media-body">
              <h5>Email</h5>
              <a href="mailto:info@uncovercampus.com">info@uncovercampus.com</a>
            </div>
          </li>
          <li class="media"><i class="la la-phone"></i> 
            <div class="media-body">
              <h5>Phone</h5>
              <a href="tel: +91-8376008292"> +91-8376008292</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="pt-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-12">
        <div class="contact-inner theme-bg">
          <div class="section-title">
            <h2 class="title">Get In<span>Touch</span></h2>
            <p class="text-white">Get in touch and let us know how we can help. Fill out the form and we’ll be in touch as soon as possible.</p>
          </div>
          <form method="POST"  enctype="multipart/form-data" role="form">
            <div class="messages"></div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input id="form_name" type="text" name="fname" class="form-control" placeholder="First name" required="required" data-error="Firstname is required.">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input id="form_lastname" type="text" name="lname" class="form-control" placeholder="Last name" required="required" data-error="Lastname is required.">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required" data-error="Valid email is required.">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input id="form_phone" type="text" name="phone" class="form-control" placeholder="Phone" required="required" data-error="Phone is required">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="2" required="required" data-error="Please,leave us a message."></textarea>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-12 mt-2">
                  <!-- <input type="submit" name="send" value="Send Message"> -->
                <button type="submit" id="submit" name="submit" class="btn btn-white btn-block"><span>Send Message</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-5 col-md-12 md-mt-5">
        <div class="map h-100">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14020.648126966336!2d77.20097492358285!3d28.534849070538584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce21e7d306d03%3A0x94b8ccb323d7648!2sMalviya%20Nagar%2C%20New%20Delhi%2C%20Delhi%20110017!5e0!3m2!1sen!2sin!4v1620567179446!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!--contact end-->

</div>

<!--body content end--> 

<?php

include('adminpanel/conn.php');
//$conn=mysqli_connect("localhost","root","","uncovercampus");
if(!$conn)
{
	die("connection faied".mysqli_connect_error());
}
else{
//echo "DB connected successfully";
}

//$conn=mysqli_connect("localhost","root","","uncovercampus");

//if($conn)
//echo "connected";

if(isset($_POST['submit']))
{
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $msg=$_POST['message'];

 $query="insert into contact(fname,lname,email,phone,message) values('$fname','$lname','$email','$phone','$msg')";
 $data=mysqli_query($conn,$query);
 if($data){
    echo '<script> swal("Message Sent","Thank you for contacting us","success");
    </script>';
}
else{
   echo '<script> swal("Something went wrong","plz try again","error");
   </script>';
}
}
//else echo "wrong";
?>


        <!--footer start-->

		<script src="footer.js"></script>

<!--footer end-->


</div>


<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="la la-hand-pointer-o"></i></a></div>

<!--back-to-top end-->


<!-- inject js start -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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