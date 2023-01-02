<?php
session_start();
include("header.php");
include("conn.php");
//error_reporting('0');
$id=$_GET['id'];

$query=mysqli_query($conn,"select * from college where id='$id'");
$result=mysqli_fetch_array($query);
$_SESSION['reserve_img']=$result['college_img'];


?>
                        


  <div class="app-content content">
      <div class="content-wrapper" >
        <div class="content-wrapper-before" ></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">College Finder</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Colleges
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Basic Inputs start -->

       <div class="content-body"><!-- Basic Inputs start -->
        <section class="file-browser">
    
    <div class="row match-height">
        
    </div>
</section>
<section>
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Update College</table></table></h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
          <ul class="list-inline mb-0">
            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
            <li><a data-action="close"><i class="ft-x"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="card-content collapse show">
        <div class="card-body">
        <div class="table-responsive">
         <form method="post"  enctype="multipart/form-data">  
          <table class="table  table-striped table-hover" style="text-align:center;width:100%">
            <thead>
              <tr>
                
                <th>College Name</th>
                <th>Fees</th>
                <th>College Image</th>  
                <th>Rating</th>
              </tr>
            </thead>
            <tbody>
              <tr >
                
                <td><input  type="text" required placeholder="Enter College Name" style="outline:none;text-align:center;margin:0px;padding:5px;border:none;min-width:1px;" name="college_name" value="<?php echo $result['college_name'] ?>" >
                </td>
                <td><input  type="text" required placeholder="Enter Fees"style="text-align:center;outline:none;margin:0px;padding:5px;border:none;min-width:1px;"name="fees" value="<?php echo$result['fees'] ?>" >
                </td>
                <td><input  type="file" required placeholder="Select image" style="text-align:center;outline:none;margin:0px;padding:5px;border:none;"name="college_img" >
                </td>  
                <td>   <input  type="text" placeholder="Rating out of 10" style="text-align:center;outline:none;margin:0px;padding:5px;border:none;"name="rating" value="<?php echo$result['rating']; ?>" >
                    <!-- <label class="switch ">
                      <input name="status" id="toggle_switch" onclick="check_value()" value="on" type="checkbox" >
                      <span class="slider round"></span>
                    </label>
                    <div id="switch_nm">Display off</div>
                    <script>
                          function check_value() {
                                  var x=document.getElementById('toggle_switch');
                                  var y=document.getElementById('switch_nm');
                                  if(x.checked){
                                      y.innerHTML='Display on';
                                      y.style.color="blue";
                                  }
                                  else{
                                    y.innerHTML='Display off';
                                    y.style.color="";
                                  }
                          }
                    </script> -->
                </td>
              </tr>
            </tbody>

            
          </table>

          <table class="table  table-striped table-hover" style="text-align:center;margin-top:30px;width:100%">
            

            <thead style="margin-top:40px">
                          <tr style="padding-top:40px">
                            <th>Location</th>
                            <th>Courses</th>
                            <th>Speciality</th>
                          </tr>
            </thead>
             <tbody>
              <tr>
           
                <td><input  type="text" placeholder="Enter  location" style="text-align:center;margin:0px;padding:5px;border:none;min-width:1px;outline:none"name="location" value="<?php echo $result['location'] ?>" >
                </td>
                <td><input  type="text" required="" placeholder="Courses they offer" style="text-align:center;outline:none; margin:0px; padding:5px; border:none; min-width:1px; "name="courses" value="<?php echo $result['courses'] ?>" >
                  <input type="hidden"  value="<?php echo $result['id'] ?>" name="idd">
                </td>
                <td><input  type="text" required placeholder="Speciality in field"style="text-align:center;outline:none;margin:0px;padding:5px;border:none;min-width:1px;"name="speciality" value="<?php echo $result['speciality'] ?>" >
                </td>
              </tr>
            </tbody>
            
          </table>

          <table class="table  table-striped table-hover" style="text-align:center;margin-top:30px;width:100%">
            

            <thead style="margin-top:40px;text-align: center;">
                          <tr style="padding-top:40px">
                            <th>Description</th>
                          </tr>
            </thead>
             <tbody>
              <tr>
                <td text-align="center">
                   <textarea class="form-control" id="placeTextarea" required="" rows="3" name="description" placeholder="Enter College Details" style="outline:none;margin:0px;" value="<?php echo $result['description'] ?> " >
                    <?php echo$result['description'] ?>
                     
                   </textarea>
                </td>
              </tr>
            </tbody>
            
          </table>
          <table class="table  table-striped table-hover" style="text-align:left;margin-top:30px;width:100%">
            
              <thead style="margin-top:40px;text-align: center;">
                            <tr style="padding-top:40px;">
                              <th>Submit</th>
                            </tr>
              </thead>
              <tbody>
                    <tr style="padding-bottom:40px">
                      
                       <td align="center" ><button name="update" id="update" type="submit"class='btn btn-glow btn-bg-gradient-x-purple-blue round update'>Update</button> </td>
                    </tr> 
              </tbody>
            
            
          </table>
        </form>
         
        </div>
      </div>
    </div>
  </div>
</div>		
</section>
     </div>
      </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                        <script src ="AgroAdmin/additional_css/app-assets/vendors/js/extensions/sweetalert2.all.js"></script>
                        <script src ="AgroAdmin/additional_css/app-assets/js/scripts/extensions/sweet-alerts.min.js"></script>
<script>  function pro_submit(){
                        swal({
                                title: "Updated!",
                                text: "Your product is updated",
                                icon: "success",
                                button: "ok",
                                }).then(function(){ window.location='college.php'; });
                    }
                    function pro_not_submit(){
                        swal({
                                title: "Not Updated!",
                                text: "Your product is not updated",
                                icon: "success",
                                button: "ok",
                                }).then(function(){ window.location='college.php'; });
                    }
                    
 </script>
<?php 

if(isset($_POST['update'])){
  $id=$_POST['idd'];
  $college_name=$_POST['college_name'];
  $fees=$_POST['fees'];
  $location=$_POST['location'];
  $rating=$_POST['rating'];
  $courses=$_POST['courses'];
  $speciality=$_POST['speciality'];
  $description=$_POST['description'];
  echo $id."<br>";echo $college_name."<br>";echo $fees."<br>";echo $location."<br>";echo $rating."<br>";echo $courses."<br>";echo $speciality."<br>";echo $description."<br>";

  
      

      if(!isset($_FILES['college_img']) || $_FILES['college_img']['error'] == UPLOAD_ERR_NO_FILE) { 
            
        echo "Error no file selected";
           $query_college="update college set college_name='$college_name',fees='$fees',location='$location',rating='$rating',courses='$courses',speciality='$speciality',description='$description' where id='$id'";
        $data=mysqli_query($conn,$query_college);
        if($data){ echo "<script> pro_submit() </script> ";}
      } 
      else if(isset($_FILES['college_img'])){   
      $college_img=$_FILES['college_img'];
      $filename_college=$_FILES['college_img']['name'];
      $tmpfile=$_FILES['college_img']['tmp_name'];
      $college_img="product_img/college_finder/".$filename_college;
      move_uploaded_file($tmpfile,$college_img); echo $filename_college;


                                              
       $query_college="update college set college_name='$college_name',fees='$fees',college_img='$filename_college',location='$location',rating='$rating',courses='$courses',speciality='$speciality',description='$description' where id='$id'";
        $data=mysqli_query($conn,$query_college);
        if($data){ echo "<script> pro_submit() </script> ";}
        else{
          echo "<script> pro_not_submit() </script> ";
        }

              }   

  }
          

include("footer.php");



?>