<?php

include("header.php");
include("conn.php");



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
                  <li class="breadcrumb-item active">College
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
        <h4 class="card-title">Add new College</table></table></h4>
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
                
                <td><input  type="text" required placeholder="Enter College Name" style="outline:none;text-align:center;margin:0px;padding:5px;border:none;min-width:1px;" name="college_name" >
                </td>
                <td><input  type="text" required placeholder="Enter Fees"style="text-align:center;outline:none;margin:0px;padding:5px;border:none;min-width:1px;"name="fees" >
                </td>
                <td><input  type="file" required placeholder="Select image" style="text-align:center;outline:none;margin:0px;padding:5px;border:none;"name="college_img" >
                </td>  
                <td>   <input  type="text" placeholder="Rating out of 10" style="text-align:center;outline:none;margin:0px;padding:5px;border:none;"name="rating" >
                   
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
              <tr >
           
                <td><input  type="text" placeholder="Enter  location" style="text-align:center;margin:0px;padding:5px;border:none;min-width:1px;outline:none"name="location"  >
                </td>
                <td><input  type="text" required="" placeholder="Courses they offer" style="text-align:center;outline:none; margin:0px; padding:5px; border:none; min-width:1px; "name="courses" >
                  <input type="hidden"  value="<?php echo $result['id'] ?>" name="id">
                </td>
                <td><input  type="text" required placeholder="Speciality in field"style="text-align:center;outline:none;margin:0px;padding:5px;border:none;min-width:1px;"name="speciality" >
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
                   <textarea class="form-control" id="placeTextarea" name="description" required="" rows="3" name="description" placeholder="Enter College Details" style="outline:none;margin:0px;" >
                     
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
                      
                       <td align="center" ><button name="submit" id="submit" type="submit"class='btn btn-glow btn-bg-gradient-x-purple-blue round update'>Add</button> </td>
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
                                }).then(function(){ window.location='college.php'; });
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
  //$id=$_POST['idd'];
  $college_name=$_POST['college_name'];
  $fees=$_POST['fees'];
  $location=$_POST['location'];
  $rating=$_POST['rating'];
  $courses=$_POST['courses'];
  $speciality=$_POST['speciality'];
  $description=$_POST['description'];

  $college_img=$_FILES['college_img'];
  $filename_college=$_FILES['college_img']['name'];
                    $tmpfile=$_FILES['college_img']['tmp_name'];
                    $college_img="product_img/college_finder/".$filename_college;
                    move_uploaded_file($tmpfile,$college_img);


 $que="insert into college (college_name,fees,location,rating,courses,speciality,description,college_img) 
        values ('$college_name','$fees','$location','$rating','$courses','$speciality','$description','$filename_college')";
 $dat=mysqli_query($conn,$que);
  if($dat){ echo "<script>  pro_submit() </script> ";}
  
}

include("footer.php");



?>