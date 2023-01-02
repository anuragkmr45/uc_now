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
$query=mysqli_query($conn,"select * from academics");						
$count=mysqli_num_rows($query);
include("header1.php");

?>

<style>
      .crs {
          -webkit-text-decoration-line: line-through; /* Safari */
            text-decoration-line: line-through; 
    }
</style>

<!--header end-->
  </head>
  <body>
      
      

		

<!--page title start-->

<section class="page-title o-hidden pos-r md-text-center" data-bg-color="#d2f9fe">
  <div class="page-title-pattern topBottom" data-bg-img="images/bg/01.png"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12">
        <h1 class="title"><span>Courses</span></h1>
        <p>We Caters All The Needs Of The College Students.</p>
      </div>
      <div class="col-lg-5 col-md-12 text-lg-right md-mt-3">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><a href="academics.php">Academics</a></li>
            <li class="breadcrumb-item active" aria-current="page">Courses</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<!--page title end-->



    <section>
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                    <div class="section-title">
                        <h2 class="title"><span>Enhance Your Skill</span></h2>
                        <div class="title-bdr">
                            <div class="left-bdr"></div>
                            <div class="right-bdr"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
        
            <?php
            // LIMIT 3,6
            $query_top3=mysqli_query($conn,"SELECT * FROM amico_wealth");
            while ($result=mysqli_fetch_array($query_top3)) {
            ?>
                
            <div class="col-lg-4 col-md-6 col-mt-6 my-5">
                <a class=" mt-3" href="amico_wealth_dtl.php?id=<?php echo $result['id']?>">
                    <div class="team-member shadow">
                        <div class="team-images" style="overflow:hidden">
                            <img class="img-fluid box-shadow" style="height:350px;" src="adminpanel/product_img/acads_img/amico_wealth_courses/<?php echo$result['course_post'] ?>" alt="">
                        </div>
                        <div class="container my-3">      
                        <!--<div class="post-desc" style="height: 130px;">-->
                        <!--    <div class="post-meta p-2" style="background-color: #e5fbef;">-->
                        <!--        <ul class="text-center">-->
                        <!--            <h5><i class="fas fa-chart-line"></i> <?php echo $result['course_name'] ?> </h5>-->
                        <!--            <h5> <b style="font-size: 25px;"><i class="fas fa-rupee-sign"></i>  <?php echo $result['org_prise'] ?> </b><span class="crs" style="font-weight: normal; font-size: 20px;"> <?php echo $result['cut_prise'] ?> </span></h5>-->
                        <!--        </ul>-->
                        <!--    </div>-->
                            <!--<div class="post-categories my-auto text-center ">View more details</div>-->
                        <!--</div>  -->
                    </div>
                </a>
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
  </body>
</html>