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
        <h1 class="title"><span>Search Result </span><?php //echo$result_info['college_name'];?></h1>
        <p><?php //echo$result_info['location'];?></p>
      </div>
      <div class="col-lg-5 col-md-12 text-lg-right md-mt-3">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a>
            </li>
            <!-- <li class="breadcrumb-item">About
            </li> -->
            <li class="breadcrumb-item active" aria-current="page">College</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<!--page title end-->


<!--code for search-->

<?php
$conn=mysqli_connect("localhost","u808479902_uc","Uncover12","u808479902_uncovercampus");
//mysql_select_db("shikin", $conn);
//search code
//error_reporting(0);
if (isset($_POST['search'])) {
    $college_list_ani = $_POST['college_list_ani'];

    if (empty($college_list_ani)) {
        $make = '<h4>You must choose atleast one property to search!</h4>';
    } else {
        $make = '<h4>No match found!! Search Again..!</h4>';
        $query = "SELECT * FROM college WHERE college_name LIKE '%$college_list_ani%' OR location LIKE '%$college_list_ani%' OR category LIKE '%$college_list_ani%'";
        $result = mysqli_query($conn, $query);
        ?>
        <section>
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-10 ml-auto mr-auto">
        <div class="section-title">
          <h2 class="title"><span> Colleges As Per Your Search</span></h2>
          <div class="title-bdr">
            <div class="left-bdr"></div>
            <div class="right-bdr"></div>
          </div>
          <p>Here you will find our recommended Colleges.The one's which have highest ratings and provide quality education.</p>
        </div>
      </div>
    </div>
    <div class="row">
        <?php

        if ($row = mysqli_num_rows($result) > 0) {
            $id=$_GET['id'];
            $query=mysqli_query($conn,"SELECT * FROM college where id='$id'");
            while ($row = mysqli_fetch_array($query)) {
        ?>
                <div class="col-lg-4 col-md-12 mt-6">
                    <a class="btn-simple mt-3" href="college_info.php?id=<?php echo $row['id']?>">
                <div class="team-member style-3">
                  <div class="team-images" style="overflow:hidden">
                    <img class="img-fluid box-shadow" style="height:250px;" src="adminpanel/product_img/college_finder/<?php echo$row['college_img'] ?>" alt="">
                    <!-- Rating -->
                    <p class="rating" size="10px">RATING<br/>
                    <b style="font-size:18px;"><?php echo$row['rating'] ?></b><span style="font-weight:bold;">/10</span></p>
                    <!-- Rating end -->
                  </div>
                  <div class="team-description " >
                    <a href="college_info.php?id=<?php echo $row['id']?>"><h5 class="college_u"><?php echo$row['college_name'];?></h5></a>
                   <span>  <?php echo$row['location'] ?></span><BR/>
                   <span style="color:blue;"><?php echo$row['speciality'] ?></span>
                     <div class="social-icons team-social-icon">
                      <ul>
                        <li class="social-facebook">Year of establishment - <?php echo $row['establish_year']?>
                        </li>
                      </ul>
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
              <?php
        } else {
            echo '<h2> Search Result</h2>';

            print($make);
        }
        mysqli_free_result($result);
        mysqli_close($conn);
    }
}

?>
</div>
</div>

<!--footer start-->

<script src="footer.js"></script>

<!--footer end-->




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

