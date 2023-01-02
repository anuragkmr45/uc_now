<?php
include("header1.php");
$query=mysqli_query($conn,"select * from college");						
$count=mysqli_num_rows($query);

$query_camp=mysqli_query($conn,"select * from campus_explorer");						
$count_camp=mysqli_num_rows($query_camp);

// $selected_college_name=$_GET['$selected_college_name'];
?>

<!-- page wrapper start -->

<div class="page-wrapper">



<!--page title start-->

<section class="page-title o-hidden pos-r md-text-center" data-bg-color="#d2f9fe">
  <div class="page-title-pattern topBottom" data-bg-img="images/bg/01.png"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12">
        <h1 class="title"><span>Campus</span> Explorer</h1>
        <p>Uncover the hidden gems of campus here, be it fairly cheap local markets for food and fashion, hangout addas, eateries or serene places around the campus to rejuvenate yourself.</p>
      </div>
      <div class="col-lg-5 col-md-12 text-lg-right md-mt-3">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">Campus Explorer
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<!--page title end-->


<!--body content start-->

<div class="page-content">

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12 order-lg-12">
                
                <div class="row">
                        <?php
                            while($result=mysqli_fetch_array($query)){
                        ?>
                        <a href="campus_searched_by_college.php?college_name=<?php echo $result['college_name']?>">
                        <div class="col-lg-6" >
                            <div class="post mt-3 ">
                              <div class="post-image"> 
                                <center>
                                    <img class=" ml-auto mr-auto " style="height: 250px;" src="adminpanel/product_img/college_finder/<?php echo $result['college_img'] ?>" alt="">
                                </center>
                              </div>
                              <div class="post-desc">
                                <div class="post-meta" >
                                  <ul class="list-inline">
                                    <li><i class="la la-user mr-1"></i> Rating- <?php echo $result['rating']?></li>
                                  </ul>
                                </div>
                                <div class="post-title"style="height:100px">
                                  <h4><a href="campus_searched_by_college.php?college_name=<?php echo $result['college_name']?>"><?php echo $result['college_name']?></a></h4>
                                </div>
                                <div class="post-categories mt-4">
                                  <ul class="list-inline">
                                    <li><?php echo $result['location']?></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                        </div> </a>
                        
                        <?php 
                            }
                        ?>
                </div>
      </div>
      <div class="col-lg-4 col-md-12 sidebar order-lg-1 md-mt-5">
        <div class="widget">
          <div class="widget-search">
            <form class="form-inline form" action="campus_searched_by_college.php">
              <div class="widget-searchbox">
                <button type="submit" class="search-btn"> <i class="fa fa-search"></i>
                </button>
                <input type="text" name="college_name" list="coll_list" placeholder="Search Here..." class="form-control">
                <datalist id="coll_list">
                        <?php
                            $query2=mysqli_query($conn,"select * from college");	
                            while($result2=mysqli_fetch_array($query2)){
                        ?>
                    <option value="<?php echo $result2['college_name'];?>">
                        <?php } ?>
                </datalist>
              </div>
            </form>
          </div>
        </div>
        <div class="widget">
          <!--<h5 class="widget-title">College List</h5>-->
          <div class="recent-post">
            <ul class="list-unstyled">
                        <?php
                            $query3=mysqli_query($conn,"select * from college where id='$id'");	
                            while($result3=mysqli_fetch_array($query3)){
                        ?>
                          <a href="campus_searched_by_college.php?college_name=<?php echo $count_camp['college_name'] ?>">
                          <li class="mb-3" style="margin-top:30px;margin-bottom:30px;">
                            <div class="recent-post-thumb">
                              <img class="" style="height:80px; width:100px;" src="adminpanel/product_img/college_finder/<?php echo $result3['college_img'] ?>" alt="">
                            </div>
                            <div class="recent-post-desc"> <?php echo $result3['college_name'];?>
                              <div class="post-date"><?php echo $result3['location'];?><span></span>
                              </div>
                            </div>
                          </li>
                        </a> 
                        <?php } ?>
              
            </ul>
          </div>
        </div>
        
                        <?php
                            $query4=mysqli_query($conn,"select * from college group by location");
                            while($result4=mysqli_fetch_array($query4)){
                        ?>
        <!--                    <div class="recent-post-thumb">-->
        <!--                        <img class="my-3" style="height:80px;" src="adminpanel/product_img/college_finder/<?php echo $result4['college_img'] ?>" alt="">-->
        <!--                    </div>-->
        <!--                    <li style=""> <a href="#"><?php echo $result4['location'];?> <span></span></a></li>-->

                       <?php } ?>
            
      </div>
    </div>
  </div>
</section>

</div>

<!--body content end--> 



<!--footer start-->

<script src="footer.js"></script>

<!--footer end-->


</div>

<!-- page wrapper end -->


<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="la la-hand-pointer-o"></i></a></div>

<!--back-to-top end-->

 
<!-- inject js start -->

<!--== jquery -->
<script src="js/common-theme.js"></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

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
