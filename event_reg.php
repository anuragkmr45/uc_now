<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!--header start-->

<?php
include("adminpanel/conn.php");
error_reporting(0);
$conn=mysqli_connect("localhost","u808479902_uc","Uncover12","u808479902_uncovercampus");
// $query=mysqli_query($conn,"select * from event_reg");						
// $count=mysqli_num_rows($query);
include("header1.php");

?>

<!--header end-->
  </head>
  <body>
      
      
<!-- page wrapper start -->

    <div class="page-wrapper">
		

<!--page title start-->

<section class="page-title o-hidden pos-r md-text-center" data-bg-color="#d2f9fe">
  <div class="page-title-pattern topBottom" data-bg-img="images/bg/01.png"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12">
        <h1 class="title"><span>Event Registration</span></h1>
        <p>We Caters All The Needs Of The College Students.</p>
      </div>
      <div class="col-lg-5 col-md-12 text-lg-right md-mt-3">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><a href="events.php">Events</li></a>
            <li class="breadcrumb-item active" aria-current="page">Events registration</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<!--page title end-->

<section>
    <div class=" container border border-success" style="border-radius: 20px;">
    <div class="container text-center py-5">
        <div class="section-title">
            <h2 class="title"> Register Your Event</h2>
            <div class="title-bdr">
                <div class="left-bdr"></div>
                <div class="right-bdr"></div>
            </div>
            <p>Register and organize your event with uncovercampus </p>
        </div>
    </div>
                
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
 $event_name=$_POST['event_name'];
 $society_name=$_POST['society_name'];
 $email=$_POST['email'];
 $contact_no=$_POST['contact_no'];
 $desc_event=$_POST['desc_event'];
 $photo_event=$_POST['photo_event'];
 $poster_event=$_POST['poster_event'];

 $query="insert into event_reg(event_name,society_name,email,contact_no,desc_event,photo_event,poster_event) values('$event_name','$society_name','$email','$contact_no','$desc_event','$photo_event',$poster_event)";
 $data=mysqli_query($conn,$query);
 if($data){
    echo '<script> swal("Successfully Register","We Will Be Contact You Soon","success");
    </script>';
}
else{
   echo '<script> swal("Something went wrong","plz try again","error");
   </script>';
}
}
?>

<div class="container px-5">
    <form method="post">
        <div class="mb-3">
            <input type="text" name="event_name" class="form-control" id="exampleInputText1 validationDefault01" aria-describedby="textHelp" placeholder="Event Name" required="required">
        </div>
        
        <div class="mb-3">
            <input type="text" name="society_name" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="Society Name" required="required">
        </div>
        
        <div class="mb-3">
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address" required="required">
        </div>
        
        <div class="mb-3">
            <input type="phone" name="contact_no" class="form-control" id="exampleInputPhone1" placeholder="Contact number" required="required">
        </div>
        
        <div class="mb-3">
            <textarea name="desc_event" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Describe your event" required="required"></textarea>
        </div>
        
        <div class="mb-3">
            <label for="formFile" class="form-label">Photo Of The Event</label>
            <input name="photo_event" class="form-control" type="file" id="formFile" required="required">
        </div>
        
        <div class="mb-3">
            <label for="formFile" class="form-label">Banner Of The Event</label>
            <input name="photo_event" class="form-control" type="file" id="formFile" required="required">
        </div>
                                
        <div class="text-center py-5">
            <button type="reset" class="btn btn-theme" data-bs-dismiss="modal">Reset</button>
            <button type="submit" id="submit" name="submit" class="btn btn-border btn-theme">Submit</button>
        </div>
    </form>
                            
                            
</div>                    

</div>
        </section>




</div>
<!-- page wrapper end -->

<!--footer start-->

<script src="footer.js"></script>

<!--footer end-->


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


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>