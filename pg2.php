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
$query=mysqli_query($conn,"select * from events where status='on'");						
$count=mysqli_num_rows($query);
include("header1.php");

?>

<!--header end-->
  </head>
  <body>
      
      

		

        <!--page title start-->

<section class="page-title o-hidden pos-r md-text-center" data-bg-color="#d2f9fe">
  <div class="page-title-pattern topBottom" data-bg-img="images/bg/01.png"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12">
        <h1 class="title"><span>Events</span></h1>
        <p>We Caters All The Needs Of The College Students.</p>
      </div>
      <div class="col-lg-5 col-md-12 text-lg-right md-mt-3">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a>
            </li>
            <!-- <li class="breadcrumb-item">About Us
            </li> -->
            <li class="breadcrumb-item active" aria-current="page">Events</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<!--page title end-->

<!--body content start-->

<div class="page-content">

<!--contact start-->


<!--blog start-->

<section>
  <div class="container">
    <div class="row align-items-center">

    
      <div class="col-lg-4 col-md-12">
        <div class="section-title">
          <h2 class="title">Top <span>events</span></h2>
          <p>Powerfull Template customer service with our tools, hendrerit omittantur mel, es vidit Ius te omittantur meles vidit Ius te altera essent incorrupte.</p>
        </div>
      </div>
      <div class="col-lg-8 col-md-12">
        <div class="owl-carousel owl-center owl-nav2" data-dots="false" data-nav="true" data-items="2" data-md-items="2" data-sm-items="1" data-center="center" data-margin="30">
                <?php 
                    $query_top3=mysqli_query($conn,"SELECT * FROM events order by id DESC");
                    while ($result=mysqli_fetch_array($query_top3)) {
                        
                  ?>
         
          <div class="item">
            <div class="post">
              <div class="post-image">
                <img class="img-fluid h-100 w-100" src="adminpanel/product_img/event_imgs/<?php echo$result['event_img'] ?>" alt="">
              </div>
              <div class="post-desc">
                <div class="post-meta">
                  <ul class="list-inline">
                    <li><i class="la la-calendar mr-1"></i> <?php echo $result['event_name'] ?> </li>
                  </ul>
                </div>
                <div class="post-categories mt-4">
                    <a href="events_detail.php"><button type="button" class="btn btn-outline-info">More Info</button></a>
                </div>
              </div>
            </div>
          </div>
          
                      <?php
                    }
                    ?>
           
        </div>
      </div>
    </div>
  </div>
</section>

<!--blog end-->


<!--event regestration start-->
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            Event Regestration
        </div>
        <div class="card-body">
            <h5 class="card-title">Event Regestration</h5>
            <p class="card-text">Regester your event with uncovercampus</p> 
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-theme" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Registration
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body ">
                            <form>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleInputText1 validationDefault01" aria-describedby="textHelp" placeholder="Event Name" required="required">
                                    <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="Society Name" required="required">
                                    <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address" required="required">
                                    <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                                </div>
                                <div class="mb-3">
                                    <input type="phone" class="form-control" id="exampleInputPhone1" placeholder="Contact number" required="required">
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Describe your event" required="required"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Photo of the event</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-theme" data-bs-dismiss="modal">Cancel</button>
                                    <!--<button type="submit" class="btn btn-theme" value="Submit">Submit</button>-->
                                    <button class="btn btn-white" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--event regestration end-->

<!--owl carousel start -->
<div class="container">
<div class="py-5  col-lg-12 col-md-12">
    <h3>Delhi University Society</h3>
    <div class="title-bdr">
        <div class="left-bdr"></div>
        <div class="right-bdr"></div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="owl-carousel owl-center owl-nav2" data-dots="false" data-nav="true" data-items="4" data-md-items="3" data-sm-items="1" data-center="center" data-margin="30">
                <?php 
                    $query_top3=mysqli_query($conn,"SELECT * FROM events order by id DESC");
                    while ($result=mysqli_fetch_array($query_top3)) {
                  ?>
         
          <div class="item">
            <div class="post">
              <div class="post-image">
                <img class="img-fluid h-100 w-80" src="adminpanel/product_img/event_imgs/<?php echo$result['event_img'] ?>" alt="">
              </div>
              <div class="post-desc">
                <div class="post-meta">
                  <ul class="list-inline">
                    <li><i class="la la-calendar mr-1"></i> Name of the Event - <?php echo $result['event_name'] ?> </li>
                  </ul>
                </div>
                <div class="post-categories mt-4">
                    <a href="events_detail.php"><button type="button" class="btn btn-outline-info">More Info</button></a>
                </div>
              </div>
            </div>
          </div>
          
                      <?php
                    }
                    ?>
           
        </div>
      </div>
</div>
</div>




<!--owl carousel end -->


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