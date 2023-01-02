<?php

include("header.php");
include("conn.php");



?>
                        


  <div class="app-content content">
      <div class="content-wrapper" >
        <div class="content-wrapper-before" ></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Campus Explorer</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Campus Explorer
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
        <h4 class="card-title">Add new Campus Explorer item</table></table></h4>
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
                <th>Property Image</th>  
                <th>Status</th>		
              </tr>
            </thead>
            <tbody>
              <tr >
                <td><input  type="text" required placeholder="Enter property name" style="outline:none;text-align:center;margin:0px;padding:5px;border:none;min-width:1px;" name="name" >
                </td>
                <td><input  type="file" required placeholder="Select image" style="text-align:center;outline:none;margin:0px;padding:5px;border:none;"name="campus_img" >
                </td>  
                <td>  <!--  <input  type="text" placeholder="on / off" style="text-align:center;outline:none;margin:0px;padding:5px;border:none;"name="status" > -->
                    <label class="switch ">
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
                </td>
              </tr>
            </tbody>

            
          </table>

          <table class="table  table-striped table-hover" style="text-align:center;margin-top:30px;width:100%">
            

            <thead style="margin-top:40px">
                          <tr style="padding-top:40px">
                            <th>Owner's Name</th>
                            <th>Owner's Phone no</th>
                            <th>Owner's Email</th>                                                        
                          </tr>
            </thead>
             <tbody>
              <tr >
                <td><input  type="text" required placeholder="Enter Owner's Name"style="text-align:center;outline:none;margin:0px;padding:5px;border:none;min-width:1px;"name="owner_nm" >
                   <input type="hidden" value="<?php echo " " ?>" name="idd">
                </td>
                <td><input  type="number" required placeholder="Enter Owner's ph no."style="text-align:center;outline:none;margin:0px;padding:5px;border:none;min-width:1px;"name="phone" >
                </td>
                <td><input  type="email" required placeholder="Enter Owner's email"style="text-align:center;outline:none;margin:0px;padding:5px;border:none;min-width:1px;"name="mail" >
                </td>
                
                
              </tr>
            </tbody>
            
          </table>

          <table class="table  table-striped table-hover" style="text-align:center;margin-top:30px;width:100%">
            

            <thead style="margin-top:40px">
                          <tr style="padding-top:40px">
                            <th>Location</th>
                            <th>Type</th>
                            <th>Last Entry Time</th>
                            <th>Add</th>
                          </tr>
            </thead>
             <tbody>	
              <tr >
                 <td><input  type="text" required placeholder="Enter complete location" style="text-align:center;margin:0px;padding:5px;border:none;min-width:1px;outline:none" name="location" >
                </td>
                <td><input  type="text" list="type_list" required placeholder="Enter type"style="text-align:center;outline:none;margin:0px;padding:5px;border:none;min-width:1px;"name="type" >
                    <datalist id="type_list">
                              <option value="Buffets">Buffets</option>
                              <option value="Salon">Salon</option>
                              <option value="Restaurant">Restaurant</option>
                              <option value="Parks">Parks</option>
                              <option value="Health">Health</option>
                              <option value="Mall">Mall</option>
                    </datalist>
                
                </td>
                <td><input  type="text" required placeholder="Enter Last Entry Time"style="text-align:center;outline:none;margin:0px;padding:5px;border:none;min-width:1px;"name="op_cl_time" >
                </td>
                <td><button name="add"id="add" type="submit"class='btn btn-glow btn-bg-gradient-x-purple-blue round update '>submit</button> </td>
              </tr>
            </tbody>
            <thead style="margin-top:40px">
                          <tr style="padding-top:40px">
                            <th colspan="4">Location</th>
                          </tr>
            </thead>
             <tbody>	
              <tr >
                 <td colspan="4">
                    <textarea  id="" cols="140" rows="5" 
                        required placeholder="Enter Description" 
                        style="text-align:center;margin:0px;padding:5px;border:none;min-width:1px;outline:none"
                        name="decr"></textarea>
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
                                title: "Done!",
                                text: "Your product is added",
                                icon: "success",
                                button: "ok",
                                }).then(function(){ window.location='campus.php'; });
                    }
                    
                       /* swal({
                                title: "Thankyou!",
                                text: "Your bid is submited",
                                icon: "success",
                                button: "ok",
                                });
                    */
 </script>
<?php 

if(isset($_POST['add'])){
  $name=$_POST['name'];
  $type=$_POST['type'];
  $status=$_POST['status'];if($status==null){ $status="off"; }
  $location=$_POST['location'];
  $decr=$_POST['decr'];
  $owner_nm=$_POST['owner_nm'];
  $phone=$_POST['phone'];
  $mail=$_POST['mail'];
  $op_cl_time=$_POST['op_cl_time'];

  $campus_img=$_FILES['campus_img'];
                    $filename_cp_img=$_FILES['campus_img']['name'];
                    $tmpfile=$_FILES['campus_img']['tmp_name'];
                    $cp_img="product_img/campus_exp/".$filename_cp_img;
                    move_uploaded_file($tmpfile,$cp_img);

                    echo $name."<br>";
                    echo $type."<br>";
                    echo $status."<br>";
                    echo $location."<br>";
                    echo $owner_nm."<br>";
                    echo $phone."<br>";
                    echo $mail."<br>";
                    echo $op_cl_time."<br>";
                    echo $filename_cp_img."<br>";


 $que="insert into campus (name,type,op_cl_time,owner_nm,phone,mail,location,status,campus_img,decr) 
        values ('$name','$type','$op_cl_time','$owner_nm','$phone','$mail','$location','$status','$filename_cp_img','$decr')";
 $dat=mysqli_query($conn,$que);
  if($dat){ echo "<script>  pro_submit() </script> ";}
  
}

include("footer.php");



?>