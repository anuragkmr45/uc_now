<?php
session_start();
include("header.php");
include("conn.php");
//error_reporting('0');
$id=$_GET['id'];

$query=mysqli_query($conn,"select * from pg where id='$id'");
$result=mysqli_fetch_array($query);
$_SESSION['reserve_img']=$result['pg_img'];




?>
                        


  <div class="app-content content">
      <div class="content-wrapper" >
        <div class="content-wrapper-before" ></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">PG Finder</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">PG
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
        <h4 class="card-title">Update PG</table></table></h4>
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
                  
                  <th>Property Name</th>
                  <th>Rent</th>
                  <th>Property Image</th>  
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr >
                  
                  <td><input  type="text"   placeholder="Enter property name" style="outline:none;text-align:center;margin:0px;padding:5px;border:none;min-width:1px;" name="pr_name" value="<?php echo $result['pr_name'] ?>" >
                  </td>
                  <td><input  type="text"   placeholder="Enter rent"style="text-align:center;outline:none;margin:0px;padding:5px;border:none;min-width:1px;"name="rent" value="<?php echo $result['rent'] ?>" >
                  </td>
                  <td><input  type="file"   placeholder="Select image" style="text-align:center;outline:none;margin:0px;padding:5px;border:none;"name="pr_img"   >
                  </td>  
                  <td>  <!--  <input  type="text" placeholder="on / off" style="text-align:center;outline:none;margin:0px;padding:5px;border:none;"name="status" > -->
                     
                      <!--switch section -->    <label class="switch ">
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
                                                </script>
                                                <?php
                                                      if($result['status']=='on'){
                                                        echo"
                                                              <script> document.getElementById('toggle_switch').checked = true;
                                                                       document.getElementById('switch_nm').innerHTML='Display on';
                                                                       document.getElementById('switch_nm').style.color='blue';
                                                              </script>
                                                        
                                                        ";
                                                      }
                                                ?>
                       <!--switch section -->
                  </td>
                </tr>
              </tbody>

              
            </table>

            <table class="table  table-striped table-hover" style="text-align:center;margin-top:30px;width:100%">
              

              <thead style="margin-top:40px">
                            <tr style="padding-top:40px">
                              <th>Location</th>
                              <th>Owener's Name</th>
                              <th>Owener's Phone no</th>
                              <th>Owener's Email</th>
                            </tr>
              </thead>
              <tbody>
                <tr >
            
                  <td><input  type="text"   placeholder="Enter complete location" style="text-align:center;margin:0px;padding:5px;border:none;min-width:1px;outline:none"name="location" value="<?php echo $result['location'] ?>" >
                  </td>
                  <td><input  type="text"   placeholder="Enter owener's Name"style="text-align:center;outline:none;margin:0px;padding:5px;border:none;min-width:1px;"name="owner_name" value="<?php echo $result['owner_name'] ?>" >
                    <input type="hidden"  value="<?php echo $result['id'] ?>" name="idd">
                  </td>
                  <td><input  type="number" required placeholder="Enter owener's ph no."style="text-align:center;outline:none;margin:0px;padding:5px;border:none;min-width:1px;"name="owner_ph" value="<?php echo $result['owner_ph'] ?>" >
                  </td>
                  <td><input  type="email" required placeholder="Enter owener's email"style="text-align:center;outline:none;margin:0px;padding:5px;border:none;min-width:1px;"name="owner_mail" value="<?php echo $result['owner_mail'] ?>" >
                  </td>
                </tr>
              </tbody>
              
            </table>

            <table class="table  table-striped table-hover" style="text-align:center;margin-top:30px;width:100%">
              

              <thead style="margin-top:40px">
                            <tr style="padding-top:40px">
                              <th>No. of Rooms</th>
                              <th>No. of Beds</th>
                              <th>Gender Prefered</th>
                              <th>Last Entry Time</th>
                              <th>Add</th>
                            </tr>
              </thead>
              <tbody>
                <tr >
                  <td ><input  type="text"   placeholder="Enter available rooms"style="text-align:center;margin:0px;padding:5px;border:none;min-width:1px;float:left"name="room_no" value="<?php echo $result['room_no'] ?>"  >
                  </td>
                  <td ><input  type="text"   placeholder="Enter available beds"style="text-align:center;margin:0px;padding:5px;border:none;min-width:1px;float:left"name="bed_no" value="<?php echo $result['bed_no'] ?>" >
                  </td>
                  <td><input  type="text"   placeholder="Enter prefered gender" style="text-align:center;margin:0px;padding:5px;border:none;min-width:1px;outline:none"name="gender" value="<?php echo $result['gender'] ?>">
                  </td>
                  <td><input  type="text"   placeholder="Enter Last Entry Time"style="text-align:center;outline:none;margin:0px;padding:5px;border:none;min-width:1px;"name="last_entry" value="<?php echo $result['last_entry'] ?>" >
                  </td>
                  <td style="width:600px"><button name="update"id="update" type="submit"class='btn btn-glow btn-bg-gradient-x-purple-blue round update '>Update</button> </td>
                </tr>
              </tbody>
              
            </table>
            <table class="table  table-striped table-hover" style="text-align:left;margin-top:30px;width:100%">
              

                <thead style="margin-top:40px">
                              <tr>
                                <th style="padding-left:100px">Room Facilities</th>
                              </tr>
                </thead>
                <tbody>
                          <tr >
                            <td><input  type="text"  placeholder="Enter Room Facilities" style="padding-left:45px;width:100%;height:50px;text-align:left;outline:none;margin:0px;border:none;min-width:1px;"name="room_facilities" value="<?php echo $result['room_facilities'] ?>"  >
                            </td>
                          </tr>
                </tbody>

                <thead style="margin-top:40px">
                              <tr style="padding-top:40px;">
                                <th style="padding-left:100px">House Rules</th>
                              </tr>
                </thead>
                <tbody>
                      <tr style="padding-top:40px">
                        <td><input  type="text" placeholder="Enter House Rules" style="padding-left:50px;width:100%;height:50px;text-align:left;margin:0px;border:none;min-width:1px;outline:none"name="house_rules" value="<?php echo $result['house_rules'] ?>" >
                        </td>
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
                                }).then(function(){ window.location='pg.php'; });
                    }
                    
 </script>
<?php 

if(isset($_POST['update'])){
  $idd=$_POST['idd'];
  $pr_name=$_POST['pr_name'];
  $rent=$_POST['rent'];
  $status=$_POST['status'];if($status==null){ $status="off"; }
  $location=$_POST['location'];
  $owner_name=$_POST['owner_name'];
  $owner_ph=$_POST['owner_ph'];
  $owner_mail=$_POST['owner_mail'];
  $room_no=$_POST['room_no'];
  $bed_no=$_POST['bed_no'];
  $gender=$_POST['gender'];
  $last_entry=$_POST['last_entry'];
  $room_facilities=$_POST['room_facilities'];
  $house_rules=$_POST['house_rules'];
  //echo $idd."<br>";echo $pr_name."<br>";echo $rent."<br>";echo $status."<br>";echo $location."<br>";echo $owner_name."<br>";
  //echo $room_no."<br>";echo $bed_no."<br>";echo $gender."<br>";echo $last_entry."<br>";echo $room_facilities."<br>";echo $house_rules."<br>";

      if(!isset($_FILES['pr_img']) || $_FILES['pr_img']['error'] == UPLOAD_ERR_NO_FILE) { 
            
        //echo "Error no file selected";
              $que="update pg set pr_name='$pr_name',rent='$rent',last_entry='$last_entry',gender='$gender',status='$status',owner_name='$owner_name',owner_mail='$owner_mail',owner_ph='$owner_ph',location='$location',room_no='$room_no',bed_no='$bed_no',room_facilities='$room_facilities',house_rules='$house_rules' where id='$idd'";
              $dat=mysqli_query($conn,$que);
              if($dat){ echo "<script> pro_submit() </script> ";}
            } 
      else if(isset($_FILES['pr_img'])){ 
        $pr_img=$_FILES['pr_img'];
        $filename_pg_img=$_FILES['pr_img']['name'];
        $tmpfile=$_FILES['pr_img']['tmp_name'];
        $pg_img="product_img/pg_finder/".$filename_pg_img;
        move_uploaded_file($tmpfile,$pg_img); echo  $filename_pg_img;  

                                              
              $que="update pg set pr_name='$pr_name',rent='$rent',last_entry='$last_entry',gender='$gender',status='$status',owner_name='$owner_name',owner_mail='$owner_mail',owner_ph='$owner_ph',location='$location',room_no='$room_no',bed_no='$bed_no',room_facilities='$room_facilities',house_rules='$house_rules',pg_img='$filename_pg_img' where id='$idd'";
              $dat=mysqli_query($conn,$que);
               if($dat){ echo "<script> pro_submit() </script> ";}

              }   

  }
          

include("footer.php");



?>