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
$query=mysqli_query($conn,"select * from intern_reg");						
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
        <h1 class="title"><span>Apply For Internships </span></h1>
        <p>Apply for internships in uncovercampus </p>
      </div>
      <div class="col-lg-5 col-md-12 text-lg-right md-mt-3">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"> Career  </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<!--page title end-->



<section>
    
    
    <div class=" container ">
        <div>
            <h3>UNCOVERCAMPUS ::</h3> <p>  It is a one stop solution for all the things that a student needs in their college life, be it notes, assignments, guidance, things to explore near their college, accommodations etc.</p>
            <div class="d-flex justify-content-around">
            <div>
            <h4>What we offer:</h4>
            <ul>
                <li>CERTIFICATE OF COMPLETION</li>
                <li>LETTER OF RECOMMENDATION</li>
                <li>MONETARY INCENTIVES UPTO 1 LAKHS</li>
                <li>PPO FOR BEST PERFORMER</li>
            </ul>
            </div>
            
            <div>
            <h4>POSITIONS AVAILABLE: </h4>
            <ul>
                <li>BUSINESS DEVELOPMENT</li>
                <li>CONTENT WRITER</li>
                <li>GRAPHIC DESIGNER</li>
                <li>VIDEO EDITOR</li>
            </ul>
            </div>
            </div>
            
            <h6>DURATION : 3 MONTHS</h6>
            <h6>For more information please free to contact us at <a href="+918376008292">+91 8376008292</h6> </p>
        </div>
    
    <div class="container text-center py-5">
        <div class="section-title">
            <h2 class="title"> Internship Form</h2>
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
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $college=$_POST['college'];
 $year=$_POST['year'];

 $query="insert into intern_reg(name,email ,phone,college ,year) values('$name','$email','$phone','$college','$year')";
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
            <input type="text" name="course" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="Candidate's Email" required="required">
                                    
        </div>
        <div class="mb-3">
            <input type="text" name="year" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="Candidate's Contact number" required="required">
                                    
        </div>
        <div class="mb-3">
            <input type="text" name="college" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="Candidate's College " required="required">
                                    
        </div>
        <div class="mb-3">
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Candidate's Course Year" required="required">
                                    
        </div>
        <div class="mb-3">
            <input type="phone" name="phone" class="form-control" id="exampleInputPhone1" placeholder="Candidate's Contact number" required="required">
        </div>
        <div class="mb-3">
            <div class="input-group">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
                `</div>
                <input type="text" class="form-control" aria-label="Text input with radio button">
            </div>
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
    -->
  </body>
</html>