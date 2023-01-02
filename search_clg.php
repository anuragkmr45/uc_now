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
            <li class="breadcrumb-item"><a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">About
            </li>
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
    $college_name = $_POST['college_name'];
    $location = $_POST['location'];
    $category = $_POST['category'];

    if (empty($college_name) || empty($location) || empty($category)) {
        $make = '<h4>You must choose atleast one property to search!</h4>';
    } else {
        $make = '<h4>No match found!</h4>';
        $query = "SELECT * FROM college WHERE college_name LIKE '%$college_name%' OR location LIKE '%$location%' OR category LIKE '%$category%'";
        $result = mysqli_query($conn, $query);
        ?>
        <div class="container">
        <table class="table table-striped " >
        <thead>
            <tr>
                <th scope="col">College Name</th>
                <th scope="col">College Image</th>
                <th scope="col">Courses</th>
                <th scope="col">Location</th>
                <th scope="col">Fees</th>
                <th scope="col">Rating</th>
                <th scope="col">Category</th>
                
            </tr>
        </thead>
        <?php

        if ($row = mysqli_num_rows($result) > 0) {
          
            while ($row = mysqli_fetch_assoc($result)) {
?>
                <!-- echo '<h4> Ground Name : '.$row['name'];
                    echo '<br> Type : '.$row['type'];
                    echo '<br> Location : '.$row['location'];
                    echo '<br> Rent : '.$row['rent'];
                    echo '</h4>'; -->


                <!-- Modal -->
                
                               
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row['college_name'] ?></td>
                                            <td><img src="adminpanel/product_img/college_finder/<?php echo $row['college_img'] ?>" height=150px width=150px></td>
                                            <td><?php echo $row['courses'] ?></td>
                                            <td><?php echo $row['location'] ?></td>
                                            <td><?php echo $row['fees'] ?></td>
                                            <td><?php echo $row['rating'] ?></td>
                                            <td><?php echo $row['category'] ?></td>
                                        </tr>
                                    </tbody>
                              

                           
<?php
            }
            ?>
              </table></div>
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

