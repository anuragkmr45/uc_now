<?php
include("adminpanel/conn.php");
$exam_id=$_GET['id'];
$exam_details=mysqli_query($conn,"select * from exams where id='$exam_id'");            
$result_info=mysqli_fetch_array($exam_details);
include("header1.php");
?>


<!--header end-->


<!--page title start-->

<section class="page-title o-hidden pos-r md-text-center" data-bg-color="#d2f9fe">
  <div class="page-title-pattern topBottom" data-bg-img="images/bg/01.png"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12">
        <h1 class="title"><span>About </span><?php echo$result_info['exam_name'];?></h1>
        <p><?php echo$result_info['exam_details_short'];?></p>
      </div>
      <div class="col-lg-5 col-md-12 text-lg-right md-mt-3">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">About
            </li>
            <li class="breadcrumb-item active" aria-current="page">Exams</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<!--page title end-->


<!--body content start-->

<div class="page-content">

<!--step start-->

<section>
 <div class="container" style="margin-bottom:-30px;padding-bottom:0px;">
  <div class="row align-items-center">
      <div class="section-title">
          <h2 class="title">Exams Details</h2>
          <div class="title-bdr">
            <div class="left-bdr"></div>
            <div class="right-bdr"></div>
          </div>
          <div class="row">
            <div class="col-md-4" style="overflow:hidden;">
              <img class="img-fluid box-shadow" style="height:250px;" src="images/exam_info.jpg" alt="">
            </div>
            <div class="col-md-8">
              <p style="padding-top:20px;font-size:18px;text-align:justify"><b><span><?php echo$result_info['exam_details_short'];?></span></b></p>
              <p style="padding-top:20px;font-size:18px;text-align:justify"><b><span><?php echo$result_info['exam_details_full'];?></span></b></p>
            </div>
          </div>   
      </div>
    </div>
</div>
</section>
<!--step end-->

<!--highlights start-->

<section>
 <div class="container" style="margin-top:-12px;padding-bottom:0px;margin-bottom:-30px;">
  <div class="row align-items-center">
      <div class="section-title col-md-6">
          <h2 class="title">Highlights of&nbsp;&nbsp;<span><?php echo$result_info['exam_name'];?></span></h2>
          <div class="title-bdr">
            <div class="left-bdr"></div>
            <div class="right-bdr"></div>
          </div>
          <div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <!-- <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th> -->
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Exam Name</th>
                  <th><?php echo$result_info['exam_name'];?></th>
                </tr>
                <tr>
                  <th scope="row">Exam Category</th>
                  <td><?php echo$result_info['category'];?></td>
                </tr>
                <tr>
                  <th scope="row">Exam Authority</th>
                  <td><?php echo$result_info['exam_authority'];?></td>
                </tr>
                <tr>
                  <th scope="row">Exam Frequency</th>
                  <td><?php echo$result_info['exam_cycle'];?></td>
                </tr>
                <tr>
                  <th scope="row">Mode Of Application</th>
                  <td><?php echo$result_info['application_mode'];?></td>
                </tr>
                <tr>
                  <th scope="row">Date Of Exam</th>
                  <td><?php echo$result_info['exam_date'];?></td>
                </tr>
                <tr>
                  <th scope="row">Mode Of Exam</th>
                  <td><?php echo$result_info['exam_mode'];?></td>
                </tr>
                <tr>
                  <th scope="row">Courses Offered</th>
                  <td><?php echo$result_info['courses'];?></td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
      <div class="section-title col-md-6">
          <h2 class="title">Exam Dates of&nbsp;&nbsp;<span><?php echo$result_info['exam_name'];?></span></h2>
          <div class="title-bdr">
            <div class="left-bdr"></div>
            <div class="right-bdr"></div>
          </div>
          <div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <!-- <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Events</th>
                  <th scope="col">Dates</th>-->
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Events</th>
                  <th>Dates</th>
                </tr>
                <tr>
                  <th scope="row">Release Of&nbsp;<?php echo$result_info['exam_name'];?>&nbsp;Application Form</th>
                  <td><?php echo$result_info['release_date'];?></td>
                </tr>
                <tr>
                  <th scope="row">Last Day For&nbsp;<?php echo$result_info['exam_name'];?>&nbsp;Registration</th>
                  <td><?php echo$result_info['last_register'];?></td>
                </tr>
                <tr>
                  <th scope="row">Last Date To Pay&nbsp;<?php echo$result_info['exam_name'];?>&nbsp;Application Fee</th>
                  <td><?php echo$result_info['last_fee'];?></td>
                </tr>
                <tr>
                  <th scope="row"><?php echo$result_info['exam_name'];?>&nbsp;Form Correction</th>
                  <td><?php echo$result_info['correction'];?></td>
                </tr>
                <tr>
                  <th scope="row">Availability Of&nbsp;<?php echo$result_info['exam_name'];?>&nbsp;Admit Card</th>
                  <td><?php echo$result_info['admit_date'];?></td>
                </tr>
                <tr>
                  <th scope="row"><?php echo$result_info['exam_name'];?>&nbsp;Exam Date</th>
                  <td><?php echo$result_info['exam_date'];?></td>
                </tr>
                <tr>
                  <th scope="row">Announcement Of&nbsp;<?php echo$result_info['exam_name'];?>&nbsp;Result</th>
                  <td><?php echo$result_info['result_date'];?></td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
    </div>
  </div>
</section>

<!--highlights end-->

<!--Imp links start-->
<section>
 <div class="container" style="margin-top:-42px;padding-top:0px;">
    <div class="row-md-12 align-items-center">
      <div class="section-title">
          <h2 class="title">Know More About Exams</h2>
          <div class="title-bdr">
            <div class="left-bdr"></div>
            <div class="right-bdr"></div>
          </div>
          <div class="row align-item-center">
            <div class="col-md-3">
              <a href="exams/exams_management.php" class="btn btn-theme" role="button"><span>Management Exams</span></a>
            </div>
            <div class="col-md-3">
              <a href="exams/exams_pharmacy.php" class="btn btn-theme" role="button"><span>Pharmacy Exams</span></a>
            </div>
            <div class="col-md-3">
              <a href="exams/exams_engineering.php" class="btn btn-theme" role="button"><span>Engineering Exams</span></a>
            </div>
            <div class="col-md-3">
              <a href="exams/exams_designing.php" class="btn btn-theme" role="button"><span>Designing Exams</span></a>
            </div>
          </div>  
      </div>
    </div>
    <div class="row-md-12 align-items-center">
      <div class="section-title">
          <div class="row align-item-center">
            <div class="col-md-3">
              <a href="exams/exams_medical.php" class="btn btn-theme" role="button"><span>Medical Exams</span></a>
            </div>
            <div class="col-md-3">
              <a href="exams/exams_law.php" class="btn btn-theme" role="button"><span>Law Exams</span></a>
            </div>
            <div class="col-md-3">
              <a href="exams/exams_animation.php" class="btn btn-theme" role="button"><span>Animation Exams</span></a>
            </div>
            <div class="col-md-3">
              <a href="exams/exams_architecture.php" class="btn btn-theme" role="button"><span>Architecture Exams</span></a>
            </div>
          </div>  
      </div>
    </div>
  </div>
</section>
<!--Imp links end-->

</div>

<!--body content end--> 


<!--footer start-->

<script src="footer.js"></script>

<!--footer end-->


</div>

<!-- page wrapper end -->


<!--color-customizer start-->



<!--color-customizer end-->


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