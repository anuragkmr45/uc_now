<?php
error_reporting(0);
$conn=mysqli_connect("localhost","u808479902_uc","Uncover12","u808479902_uncovercampus");
$query_college=mysqli_query($conn,"select * from college Where campus='off'");
$query_tags=mysqli_query($conn,"select tags,id from exams");
$query_special=mysqli_query($conn,"select speciality,id from college");
$query_exams=mysqli_query($conn,"select * from exams");
$college_count=mysqli_num_rows($query_college); 

//College Queries Start .....


$college_management=mysqli_query($conn,"SELECT * FROM college WHERE category='Management'");

$college_pharmacy=mysqli_query($conn,"SELECT * FROM college WHERE category='Pharmacy'");

$college_engineering=mysqli_query($conn,"SELECT * FROM college WHERE category='Engineering'");

$college_designing=mysqli_query($conn,"SELECT * FROM college WHERE category='Designing'");

$college_medical=mysqli_query($conn,"SELECT * FROM college WHERE category='Medical'");

$college_law=mysqli_query($conn,"SELECT * FROM college WHERE category='LAW'");

$college_animation=mysqli_query($conn,"SELECT * FROM college WHERE category='Animation'");

$college_architecture=mysqli_query($conn,"SELECT * FROM college WHERE category='Architecture'");

$college_agriculture=mysqli_query($conn,"SELECT * FROM college WHERE category='Agriculture'");

$college_aviation=mysqli_query($conn,"SELECT * FROM college WHERE category='Aviation'");

$college_commerce=mysqli_query($conn,"SELECT * FROM college WHERE category='Commerce'");

$college_hotel=mysqli_query($conn,"SELECT * FROM college WHERE category='Hotel Management'");

$college_communication=mysqli_query($conn,"SELECT * FROM college WHERE category='Mass Communication'");

$college_computer=mysqli_query($conn,"SELECT * FROM college WHERE category='Computer Applications'");

$college_travel=mysqli_query($conn,"SELECT * FROM college WHERE category='Travel&Tourism'");

$college_veterinary=mysqli_query($conn,"SELECT * FROM college WHERE category='Veterinary Sciences'");

$college_vocational=mysqli_query($conn,"SELECT * FROM college WHERE category='Vocational Courses'");

//College queries end ..... 

//Exams queries start .....
$exam_management=mysqli_query($conn,"SELECT * FROM exams WHERE category='Management'");

$exam_pharmacy=mysqli_query($conn,"SELECT * FROM exams WHERE category='Pharmacy'");

$exam_engineering=mysqli_query($conn,"SELECT * FROM exams WHERE category='Engineering'");

$exam_designing=mysqli_query($conn,"SELECT * FROM exams WHERE category='Designing'");

$exam_medical=mysqli_query($conn,"SELECT * FROM exams WHERE category='Medical'");

$exam_law=mysqli_query($conn,"SELECT * FROM exams WHERE category='LAW'");

$exam_animation=mysqli_query($conn,"SELECT * FROM exams WHERE category='Animation'");

$exam_architecture=mysqli_query($conn,"SELECT * FROM exams WHERE category='Architecture'");

$exam_agriculture=mysqli_query($conn,"SELECT * FROM exams WHERE category='Agriculture'");

$exam_aviation=mysqli_query($conn,"SELECT * FROM exams WHERE category='Aviation'");

$exam_commerce=mysqli_query($conn,"SELECT * FROM exams WHERE category='Commerce'");

$exam_hotel=mysqli_query($conn,"SELECT * FROM exams WHERE category='Hotel Management'");

$exam_communication=mysqli_query($conn,"SELECT * FROM exams WHERE category='Mass Communication'");

$exam_computer=mysqli_query($conn,"SELECT * FROM exams WHERE category='Computer Applications'");

$exam_travel=mysqli_query($conn,"SELECT * FROM exams WHERE category='Travel&Tourism'");

$exam_veterinary=mysqli_query($conn,"SELECT * FROM exams WHERE category='Veterinary Sciences'");

$exam_vocational=mysqli_query($conn,"SELECT * FROM exams WHERE category='Vocational Courses'");

//Exams Queries End .....

//Count Colleges Start .....


$count_college_management=mysqli_num_rows($college_management);

$count_college_pharmacy=mysqli_num_rows($college_pharmacy);

$count_college_engineering=mysqli_num_rows($college_engineering);

$count_college_designing=mysqli_num_rows($college_designing);

$count_college_medical=mysqli_num_rows($college_medical);

$count_college_law=mysqli_num_rows($college_law);

$count_college_animation=mysqli_num_rows($college_animation);

$count_college_architecture=mysqli_num_rows($college_architecture);

$count_college_agriculture=mysqli_num_rows($college_agriculture);

$count_college_aviation=mysqli_num_rows($college_aviation);

$count_college_commerce=mysqli_num_rows($college_commerce);

$count_college_hotel=mysqli_num_rows($college_hotel);

$count_college_mass_com=mysqli_num_rows($college_communication);

$count_college_computer=mysqli_num_rows($college_computer);

$count_college_travel=mysqli_num_rows($college_travel);

$count_college_veterinary=mysqli_num_rows($college_veterinary);

$count_college_vocational=mysqli_num_rows($college_vocational);


//College Count end ......


//Exams Count start ....


$count_exam_management=mysqli_num_rows($exam_management);

$count_exam_pharmacy=mysqli_num_rows($exam_pharmacy);

$count_exam_engineering=mysqli_num_rows($exam_engineering);

$count_exam_designing=mysqli_num_rows($exam_designing);

$count_exam_medical=mysqli_num_rows($exam_medical);

$count_exam_law=mysqli_num_rows($exam_law);

$count_exam_animation=mysqli_num_rows($exam_animation);

$count_exam_architecture=mysqli_num_rows($exam_architecture);

$count_exam_agriculture=mysqli_num_rows($exam_agriculture);

$count_exam_aviation=mysqli_num_rows($exam_aviation);

$count_exam_commerce=mysqli_num_rows($exam_commerce);

$count_exam_hotel=mysqli_num_rows($exam_hotel);

$count_exam_mass_com=mysqli_num_rows($exam_communication);

$count_exam_computer=mysqli_num_rows($exam_computer);

$count_exam_travel=mysqli_num_rows($exam_travel);

$count_exam_veterinary=mysqli_num_rows($exam_veterinary);

$count_exam_vocational=mysqli_num_rows($exam_vocational);


//Exams Count End ....
include("header1.php");
?>


<!--header end-->



<!--hero section start-->

<section class="page-title o-hidden pos-r md-text-center" data-bg-color="#d2f9fe">
  <div class="page-title-pattern topBottom" data-bg-img="images/bg/01.png"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12">
        <h1 class="title"><span>Off Campus </span>Colleges</h1>
        <p>Your search for selecting a perfect college in campus ends here. Our accurate search box helps you to take a virtual tour with all necessary information of your desired college and quirky hang out spots where you can detox with your pals!</p>
      </div>
      <div class="col-lg-5 col-md-12 text-lg-right md-mt-3">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="college.php">Colleges</a>
            </li>
            <li class="breadcrumb-item">Off Campus
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<!--hero section end-->


<!--body content start-->

<div class="page-content">
    <!--about start-->
<section>
    <div class="container">
        <div class="col-md-12">
            <h3 align="center">Search Your Colleges Here</h3>
            <div class="job-search">
            <form method="POST" action="search_clg2.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-9 sm-mt-2">
                        <div class="form-group mb-0">
                            <input type="text" name="college_list_ani" list="coll_list" placeholder="Search College by Name/ Location / Category..." class="form-control" required="required" data-error="Please select an option.">
                            <datalist id="coll_list">
                                <?php
                                    $query2=mysqli_query($conn,"select * from college where campus='off'");
                                        while($result2=mysqli_fetch_array($query2)){
                                ?>
                                
                                    <option value="<?php echo $result2['college_name'];?>">
                                    <option value="<?php echo $result2['category'];?>">
                                    <option value="<?php echo $result2['location'];?>">
                                <?php } ?>
                            </datalist>
                        </div>
                    </div>
                    <div class="col-md-3 sm-mt-3">
                        <button class="btn btn-theme btn-block" type="submit" name="search"><span>Search</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</section>
</div>

<!--body content end-->




<!-- College listing session start -->

<section>
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-10 ml-auto mr-auto">
        <div class="section-title">
          <h2 class="title">Off Campus<br> <span>Colleges</span></h2>
          <div class="title-bdr">
            <div class="left-bdr"></div>
            <div class="right-bdr"></div>
          </div>
          <p>Here you will find off campus Colleges.The one's which have highest ratings and provide quality education.</p>
        </div>
      </div>
    </div>
    <div class="row">

        <?php
              while ($result=mysqli_fetch_array($query_college)) {
                     
        ?>
              <div class="col-lg-4 col-md-12 mt-6">
                <div class="team-member style-3">
                  <div class="team-images" style="overflow:hidden">
                    <img class="img-fluid box-shadow" style="height:250px;" src="adminpanel/product_img/college_finder/<?php echo$result['college_img'] ?>" alt="">
                    <p class="rating" size="10px">RATING<br/>
<!-- Rating Start -->
                    <b style="font-size:21px;font-weight:1000px"><?php echo$result['rating'] ?></b><span style="font-weight:bolder;">/10</span></p>
<!-- Rating End -->
                  </div>
                  <div class="team-description leftRight" >
                    <a href="college_info.php?id=<?php echo $result['id']?>"><h5 class="college_u"><?php echo$result['college_name'];?></h5></a>
                   <span>  <?php echo$result['location'] ?></span><BR/>
                   <span style="color:blue;"><?php echo$result['speciality'] ?></span>
                     <div class="social-icons team-social-icon">
                      <ul>
                        <li class="social-facebook"><?php echo "Year Of Establishment - ".$result['establish_year']?>
                        </li>
                      </ul>
                    </div>
                    <a class="btn-simple mt-3" href="college_info.php?id=<?php echo $result['id']?>">View more details</a>
                  </div>
                </div>
              </div>
      
           <?php
                } 
           ?>
    </div>
  </div>
</section>




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

