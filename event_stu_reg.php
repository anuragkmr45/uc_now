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
$event_id=$_GET['id'];
$query=mysqli_query($conn,"select * from events where id ='$event_id' ");						
// $result=mysqli_num_rows($query);
$result=mysqli_fetch_array($query);
include("header1.php");

?>

<!--header end-->
  </head>
  <body>
      
      
<!-- page wrapper start -->

    <div class="page-wrapper">
		

<!--page title start-->

<section class="page-title o-hidden pos-r md-text-center" data-bg-color="#d2f9fe">
  <div class="page-title-pattern topBottom" data-bg-img="adminpanel/product_img/event_imgs/event_posters/<?php echo$result['event_poster'] ?>"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12">
        <h1 class="title">Register For <span> <?php echo $result['event_name'] ?></span></h1>
        <p>Here you can register the <?php echo $result['event_type'] ?> form of <?php echo $result['event_name'] ?></p>
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
            <h2 class="title"> Register Form</h2>
            <div class="title-bdr">
                <div class="left-bdr"></div>
                <div class="right-bdr"></div>
            </div>
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
 $society_name=  $result['society_name'];
 $event_name= $result['event_name'];
 $name=$_POST['name'];
 $course=$_POST['course'];
 $year=$_POST['year'];
 $college=$_POST['college'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];

 $query="insert into event_stu_reg(society,event,name,course,year,college,email,phone) values('$society_name','$event_name','$name','$course','$year','$college','$email','$phone')";
 $data=mysqli_query($conn,$query);
 
 if($data){
    echo '<script> swal("Successfully Register","Success");
    </script>';
}
else{
   echo '<script> swal("Something went wrong","plz try again","error");
   </script>';
}
}
?>

<div class="container px-5 ">
    <form method="post">
        <div class="mb-3">
            <input type="text" name="name" class="form-control" id="exampleInputText1 validationDefault01" aria-describedby="textHelp" placeholder=" Name" required="required">
                                    
        </div>
        <div class="mb-3">
            <input type="text" name="course" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder=" Course " required="required">
                                    
        </div>
        <div class="mb-3">
            <input type="text" name="year" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="  Year" required="required">
                                    
        </div>
        <div class="mb-3">
            <input type="text" name="college" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder=" College " required="required">
                                    
        </div>
        <div class="mb-3">
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address" required="required">
                                    
        </div>
        <div class="mb-3">
            <input type="phone" name="phone" class="form-control" id="exampleInputPhone1" placeholder="Contact number" required="required">
        </div>
                                
                                
        <div class="text-center py-5">
            <button type="button" class="btn btn-theme" data-bs-dismiss="modal">Cancel</button>
            <!--<button type="submit" class="btn btn-theme" value="Submit">Submit</button>-->
            <button type="submit" id="submit" name="submit" class="btn btn-border btn-theme">Submit</button>
        </div>
    </form>
                            
                            
</div>    
</div>

        </section>
        
        <div class="container">
            <h3 class="text-center"><a href="<?php echo $result['team_group'] ?>"> <i class="fab fa-whatsapp"></i>  Join the group of the  <?php echo $result['event_type'] ?></a></h3>
        </div>




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