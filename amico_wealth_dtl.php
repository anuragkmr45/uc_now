<?php
include("adminpanel/conn.php");
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from amico_wealth where id='$id'");
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
    <style>
  .crs {
   -webkit-text-decoration-line: line-through; /* Safari */
   text-decoration-line: line-through; 
}
  @media (max-width: 426px) {
            .sizing{
                height: 200px;
                width:350px;
                margin-bottom: 20px;
            }
        }
        
        
         .tablink {
  background-color: #;
  color: #353c5e;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  /*color: white;*/
  display: none;
  padding: 100px 20px;
  height: 100%;
}

#Home {background-color: white;}
#News {background-color: white;}
#Contact {background-color: white;}
#About {background-color: white;}

@media (max-width: 768px) {
      .disp-1{
          display: flex;
          flex-direction: column;
          justify-content:center;
      }
      
  }
    </style>


    <!-- inject css end -->
    
</head>

<body>
    
    
    <!-- page wrapper start -->
        <!--hero section start-->

<div class="page-title o-hidden pos-r md-text-center" data-bg-color="">
    <div class="page-title-pattern " data-bg-img=""></div>
        <div class="container">
            <div class="d-flex disp-1 justify-content-between">
                <div class="col-lg-8 col-md-12 mr-4">
                    <h1 class="title"><span><?php echo$result['course_name'] ?></span></h1>
                    <p><b>Live Workshop</b> <?php echo$result['about_course'] ?></p>
                <div class="mt-5">
                    <img src="adminpanel/product_img/acads_img/amico_wealth_courses/<?php echo$result['course_img'] ?>" class="sizing" style="width: 100%; text-align:center;">
                </div>
                </div>
                
                <div class="shadow p-3 mx-auto text-center" style="">
                    <h5><br><span style="font-weight: 1000;font-size: 30px;"><i class="fas fa-rupee-sign"></i>  <?php echo$result['org_prise'] ?> </span> <span class="crs" style="font-weight: normal;"> <?php echo$result['cut_prise'] ?> /- </span></h5>
                        <p class="my-4" style="color: green; "></p>
                    <div class="">
                         <?php echo$result['pay_button'] ?>
                    </div>
                    <div class="m-5">
                            <p style="text-align: left;"><i class="fas fa-check-square"></i> <b>Duration :  </b><br><?php echo$result['duration'] ?></b></p><br>
                            <p style="text-align: left;"><i class="fas fa-check-square"></i> <b>Mode : </b><br><?php echo$result['mode'] ?></b></p><br>
                            <p style="text-align: left;"><i class="fas fa-check-square"></i> <b>Recordings : </b><br><?php echo$result['recordings'] ?></b></p><br>
                            <p style="text-align: left;"><i class="fas fa-check-square"></i> <b>Recognition : </b><br><?php echo$result['recognition'] ?></b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
        </div>
</div>



<!--hero section start-->
        
        <section style="background-color: #f1f3f6;">
            <div class="container">
                <button class="tablink" onclick="openPage('Home', this, 'white')" id="defaultOpen">About</button>
                <button class="tablink" onclick="openPage('News', this, 'white')" >Workshop Content</button>

                <div id="Home" class="tabcontent">
                    
                    <div class="d-flex justify-content-around disp-1">
                     <div class="shadow p-5" style="border-radius:10px;" >
                    <h4>Instructor:</h4> <p>Shivanshu Abhinandan Singh ACCA, CFA , FRM<br> Founder and CIO : Amico Wealth</p>
                    <h4>Language:</h4> <p>Hinglish</p>
                    <h4>For any queries  : </h4><p>Contact : <a href="+91-9024878593">+91-9024878593</a></p>
                    <p>Email : <a href="info@amicowelth.com">info@amicowelth.com</a></p>
                    </div>
                    </div>
                </div>

                <div id="News" class="tabcontent">
                    <div class="">
                    <div style="background-color: rgba(241, 241, 241, 0.552);">
                        <div class="m-5">
                        <h4 class="text-center"><?php echo$result['course1'] ?></h4>
                        <P> <?php echo$result['course_content1'] ?></P><br>
                        <P> <?php echo$result['course_content2'] ?></P><br>
                        <P> <?php echo$result['course_content3'] ?></P><br>
                        <P> <?php echo$result['course_content4'] ?></P><br>
                        <P> <?php echo$result['course_content5'] ?></P><br>
                        <P> <?php echo$result['course_content6'] ?></P><br>
                        <P> <?php echo$result['course_content7'] ?></P><br>
                        <P> <?php echo$result['course_content8'] ?></P><br>
                        <P> <?php echo$result['course_content9'] ?></P><br>
                        <P> <?php echo$result['course_content10'] ?></P><br>
                        <P> <?php echo$result['course_content11'] ?></P><br>
                        <P> <?php echo$result['course_content12'] ?></P><br>
                        <P> <?php echo$result['course_content13'] ?></P><br>
                        <P> <?php echo$result['course_content14'] ?></P><br>
                             </div>
                    </div>
                    
                    <div style="background-color: ;">
                        <div class="m-5">
                        <h4 class="text-center"><?php echo$result['course2'] ?></h4>
                        <P> <?php echo$result['course_content01'] ?></P><br>
                        <P> <?php echo$result['course_content02'] ?></P><br>
                        <P> <?php echo$result['course_content03'] ?></P><br>
                        <P> <?php echo$result['course_content04'] ?></P><br>
                        <P> <?php echo$result['course_content05'] ?></P><br>
                        <P> <?php echo$result['course_content06'] ?></P><br>
                        <P> <?php echo$result['course_content07'] ?></P><br>
                        <P> <?php echo$result['course_content08'] ?></P><br>
                        <P> <?php echo$result['course_content09'] ?></P><br>
                        <P> <?php echo$result['course_content010'] ?></P><br>
                        <P> <?php echo$result['course_content011'] ?></P><br>
                        <P> <?php echo$result['course_content012'] ?></P><br>
                        <P> <?php echo$result['course_content013'] ?></P><br>
                        <P> <?php echo$result['course_content014'] ?></P><br>
                             </div>
                    </div>
                    <div style="background-color: rgba(241, 241, 241, 0.552);" >
                        <div class="m-5">
                        <h4 class="text-center"></h4>
                         <!--<P><i class="fas fa-check-circle"></i> Understanding the basics</P><br>-->
                         <!--<P><i class="fas fa-check-circle"></i> Mutual Fund vs. ETF</P><br>-->
                         <!--<P><i class="fas fa-check-circle"></i> Types of mutual funds and schemes</P><br>-->
                         <!--<P><i class="fas fa-check-circle"></i> Common terminologies and concepts</P><br>-->
                         <!--<P><i class="fas fa-check-circle"></i> Selecting the right mutual fund scheme</P><br>-->
                         <!--<P><i class="fas fa-check-circle"></i> Creating a mutual fund portfolio</P><br>-->
                         <!--<P><i class="fas fa-check-circle"></i> How & when to review/rebalance a mutual fund portfolio</P><br>-->
                         </div>
                    </div>
                    
                    <div style="background-color: ;">
                        <div class="m-5">
                        <!--<h4 class="text-center"> Fundamental Analysis (Live Project Begins)</h4>-->
                        <!--     <P><i class="fas fa-check-circle"></i> Introduction to fundamental analysis</P><br>-->
                        <!--     <P><i class="fas fa-check-circle"></i> Fundamental vs. Technical</P><br>-->
                        <!--     <P><i class="fas fa-check-circle"></i> Different approaches to fundamental analysis</P><br>-->
                        <!--     <P><i class="fas fa-check-circle"></i> Understanding the major industries in India (Business model, unique KPI’s & CSF’s)</P><br>-->
                        <!--     <P><i class="fas fa-check-circle"></i> Business analysis: in-depth coverage and comprehensive checklist</P><br>-->
                        <!--     <P><i class="fas fa-check-circle"></i> Reading and evaluating an analyst’s report, earning concall, and market behavior</P><br>-->
                        <!--     <P><i class="fas fa-check-circle"></i> Introduction to financial accounting</P><br>-->
                        <!--     <P><i class="fas fa-check-circle"></i> Understanding financial statements</P><br>-->
                        <!--     <P><i class="fas fa-check-circle"></i> Financial analysis: in-depth coverage and comprehensive checklist</P><br>-->
                        <!--     <P><i class="fas fa-check-circle"></i> Identifying creative accounting and financial frauds (case studies)</P><br>-->
                        <!--     <P><i class="fas fa-check-circle"></i> Valuing a company through various approaches</P><br>-->
                        <!--     <P><i class="fas fa-check-circle"></i> Making an equity research report</P><br>-->
                        <!--     <P><i class="fas fa-check-circle"></i> Wrapping it all together</P><br>-->
                             </div>
                    </div>
                </div>
                </div>
                
                    <!--<div id="About" class="tabcontent">-->
                    <!--    <h3>Having Doubt</h3>-->
                    <!--    <h4>Contact :  Varun Sah </h4>-->
                    <!--</div>-->
    </div>
    </div>
    </section>
        
        
        
        <!--footer start-->

        <script src="footer.js"></script>

        <!--footer end-->
        
    
        <script>
            function openPage(pageName, elmnt, color) {
            // Hide all elements with class="tabcontent" by default */
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Remove the background color of all tablinks/buttons
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }

            // Show the specific tab content
            document.getElementById(pageName).style.display = "block";

            // Add the specific color to the button used to open the tab content
            elmnt.style.backgroundColor = color;
            }

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
        </script>
    

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
        
    </div>
</body>