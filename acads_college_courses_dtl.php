<?php
include("adminpanel/conn.php");
$academics_id=$_GET['id'];
$query=mysqli_query($conn,"select * from academics where id='$academics_id'");
$result=mysqli_fetch_array($query);
include("header1.php");


?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="HTML5 Template" />
    <meta name="author" content="www.themeht.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>UncoverCampus</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/ULLU2.png" />

    <!-- inject css start -->

    <!--== bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!--== animate -->
    <link href="css/animate.css" rel="stylesheet" type="text/css" />

    <!--== fontawesome -->
    <link href="css/fontawesome-all.css" rel="stylesheet" type="text/css" />

    <!--== line-awesome -->
    <link href="css/line-awesome.min.css" rel="stylesheet" type="text/css" />

    <!--== magnific-popup -->
    <link href="css/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

    <!--== owl-carousel -->
    <link href="css/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />

    <!--== base -->
    <link href="css/base.css" rel="stylesheet" type="text/css" />

    <!--== shortcodes -->
    <link href="css/shortcodes.css" rel="stylesheet" type="text/css" />

    <!--== default-theme -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <!--== responsive -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />

    <!--== color-customizer -->


    <!-- inject css end -->
    
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
                        
                        <h1 class="title"><span><?php echo $result['course_name'] ?></span>
                        </h1>
                    </div>
                    <div class="col-lg-5 col-md-12 text-lg-right md-mt-3">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="academics.php">Academics</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $result['course_name'] ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!--page title end-->
        
        
        <!--desc of course start -->
        
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="section-title">
                    <h3 class="title">What is <?php echo $result['course_name'] ?>?? </h3>
                                
                    <div class="title-bdr">
                        <div class="left-bdr"></div>
                        <div class="right-bdr"></div>
                    </div>
                                
                        <p style="padding-top:5px;font-size:16px;"><b><span>
                            
                        </span></b></p>
                </div>
            </div>
        </div>
        
        
        <!--desc of course end -->
        
        
         <!-- table of content -->
        
        <div class="container pt-5">
            <div class="row align-items-center">
                <div class="section-title">
                    <h3 class="title"> Table Of Content </h3>
                    <div class="title-bdr">
                        <div class="left-bdr"></div>
                        <div class="right-bdr"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="portfolio-filter">
                                <a href="#"><button class="is-checked" style="margin:12px;">All</button></a>
                                <a href="#syllabus"><button class="" style="margin:12px;">Syllabus</button></a>
                                <a href="#notes"><button style="margin:12px;">Subject Notes</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
      
      
      
        <div id="syllabus" class="container">
            <div class="row align-items-center">
                <div class="section-title">
                    <h3 class="title">Syllabus : </h3>
                                
                    <div class="title-bdr">
                        <div class="left-bdr"></div>
                        <div class="right-bdr"></div>
                    </div>
                                
                        <p style="padding-top:5px;font-size:16px;"><b><span>
                            <a href="academics_pdf/<?php echo $result['syllabus'] ?>" target="_blank" style="color:  rgb(6,69,173);">Click to get syllabus</a>
                        </span></b></p>
                </div>
            </div>
        </div>
      
      
        <div id="notes" class="container">
            <div class="row align-items-center">
                <div class="section-title">
                    <h3 class="title">Subject notes</h3>
                                
                    <div class="title-bdr">
                        <div class="left-bdr"></div>
                        <div class="right-bdr"></div>
                    </div>
                            
                        <!--<button class="btn btn-theme" style="padding-top:10px;font-size:16px;" onclick="myFunction()"> <span>Click to get notes of B.Com. </span></button>-->

                </div>
            </div>
        </div>
      
      <div class="container" id="myDIV">
          <table class="table table-striped">
            <thead>
                <tr>
      <th scope="col"> Semester </th>
      <th scope="col">Notes Link</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1st</td>
      <td><a href="academics_pdf/<?php echo $result['material_sem1'] ?>" target="_blank" style="color:  rgb(6,69,173);">Click to get notes of !st sem.</a></td>
    </tr>
    <tr>
      <td>2nd</td>
      <td><a href="academics_pdf/<?php echo $result['material_sem2'] ?>" target="_blank" style="color:  rgb(6,69,173);">Click to get notes of 2nd sem.</a></td>
    </tr>
    <tr>
      <td>3rd</td>
      <td><a href="academics_pdf/<?php echo $result['material_sem3'] ?>" target="_blank" style="color:  rgb(6,69,173);">Click to get notes of 3rd sem.</a></td>
    </tr>
    <tr>
      <td>4th</td>
      <td><a href="academics_pdf/<?php echo $result['material_sem4'] ?>" target="_blank" style="color:  rgb(6,69,173);">Click to get notes of 4th sem.</a></td>
    </tr>
    <tr>
      <td>5th</td>
      <td><a href="academics_pdf/<?php echo $result['material_sem5'] ?>" target="_blank" style="color:  rgb(6,69,173);">Click to get notes of 5th sem.</a></td>
    </tr>
    <tr>
      <td>6th</td>
      <td><a href="academics_pdf/<?php echo $result['material_sem6'] ?>" target="_blank" style="color:  rgb(6,69,173);">Click to get notes of 6th sem.</a></td>
    </tr>
  </tbody>
</table>
      </div>
       
     
        
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

    <script>
        function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    </script>
    
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
        
    </div>
</body>