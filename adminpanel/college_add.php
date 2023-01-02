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
                <td><input  type="text" required placeholder="Enter Fees"style="text-align:center;outline:none;margin:0px;padding:5px;border:none;min-width:1px;"name="fees">
                </td>
                <td><input  type="file" required placeholder="Select image" style="text-align:center;outline:none;margin:0px;padding:5px;border:none;"name="college_img" >
                </td>  
                <td>   <input  type="text" placeholder="Rating out of 10" style="text-align:center;outline:none;margin:0px;padding:5px;border:none;"name="rating" >
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
                            <th>Categories</th>
                          </tr>
            </thead>
             <tbody>
              <tr >
           
                <td><input class="form-control"  type="text" required placeholder="Enter location" style="text-align:center;margin:0px;padding:5px;border:none;min-width:1px;outline:none"name="location" >
                </td>
                <td><input class="form-control"  type="text" required placeholder="Courses they offer"style="text-align:center;outline:none;margin:0px;padding:5px;border:none;min-width:1px;"name="courses" >
                   <input type="hidden" value="<?php echo " " ?>" name="idd">
                </td>
                 <td><input class="form-control"  type="text" required placeholder="Speciality in field"style="text-align:center;outline:none;margin:0px;padding:5px;border:none;min-width:1px;"name="speciality">
                </td>
                  <td>
                  <fieldset class="form-group position-relative" name="category" >
                            <select class="form-control custom-select input-sm" name="category" style="outline:none;text-align:center;margin:0px;padding:5px;border:none;">
                                <option selected>Select Category</option>
                                <option value="Management">Management</option>
                                <option value="Pharmacy">Pharmacy</option>
                                <option value="Engineering">Engineering</option>
                                <option value="Designing">Designing</option>
                                <option value="Medical">Medical</option>
                                <option value="LAW">LAW</option>
                                <option value="Animation">Animation</option>
                                <option value="Architectural">Architectural</option>
                                <option value="Agriculture">Agriculture</option>
                                <option value="Aviation">Aviation</option>
                                <option value="Commerce">Commerce</option>
                                <option value="Hotel Management">Hotel Management</option>
                                <option value="Mass Communication">Mass Communication</option>
                                <option value="Computer Applications">Computer Applications</option>
                                <option value="Travel&Tourism">Travel&Tourism</option>
                                <option value="Veterinary Science">Veterinary Science</option>
                                <option value="Vocational Courses">Vocational Courses</option>
                            </select>
                  </fieldset>
                 </td>
              </tr>
            </tbody>
            
          </table>

          <table class="table  table-striped table-hover" style="text-align:center;margin-top:30px;width:100%">
            

            <thead style="margin-top:40px;text-align: center;">
                          <tr style="padding-top:40px">
                            <th>Description</th>
							<th>keyfacts</th>
                          </tr>
            </thead>
             <tbody>
              <tr>
                <td text-align="center">
                   <textarea class="form-control" id="placeTextarea" required="" rows="2"  name="description" placeholder="Enter College Details" style="outline:none;margin:0px;height:50px;" >
                     
                   </textarea>
                </td>
				<td text-align="center">
                   <textarea class="form-control" id="placeTextarea" required="" rows="2"  name="keyfacts" placeholder="Enter Key Facts" style="outline:none;margin:0px;height:50px;" >
                     
                   </textarea>
                </td>
              </tr>
            </tbody>
            
          </table>
		  <table class="table  table-striped table-hover" style="text-align:center;width:100%">
            <thead>
              <tr>
                
                <th>Admission</th>
				<th>How to Apply</th>
				 </tr>
            </thead>
			<tbody>
              <tr>
                <td text-align="center">
                   <textarea class="form-control" id="placeTextarea" required="" rows="2"  name="admission" placeholder="Enter Admission Criteria" style="outline:none;margin:0px;height:50px;" >
                     
                   </textarea>
                </td>
              
                <td text-align="center">
                   <textarea class="form-control" id="placeTextarea" required="" rows="2"  name="how_apply" placeholder="How to Apply" style="outline:none;margin:0px;height:50px;" >
                     
                   </textarea>
                </td>
              </tr>
            </tbody>
			</table>
			<table class="table  table-striped table-hover" style="text-align:center;margin-top:30px;width:100%">
            

            <thead style="margin-top:40px;text-align: center;">
                          <tr style="padding-top:40px">
                            <th>Scholarship</th>
                          </tr>
            </thead>
			<tbody>
              <tr>
                <td text-align="center">
                   <textarea class="form-control" id="placeTextarea" required="" rows="2"  name="scholarship" placeholder="Enter privately Scolarship offered" style="outline:none;margin:0px;height:50px;" >
                     
                   </textarea>
                </td></tr>
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
                      
                       <td align="center" ><button name="add" id="add" type="submit"class='btn btn-glow btn-bg-gradient-x-purple-blue round update'>Add</button> </td>
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
                       <!--  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
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
  $college_name=$_POST['college_name'];
  $fees=$_POST['fees'];
  
  $location=$_POST['location'];
  $rating=$_POST['rating'];
  $courses=$_POST['courses'];
  $speciality=$_POST['speciality'];
  $category=$_POST['category'];
  $description=$_POST['description'];
   $keyfacts=$_POST['keyfacts'];
  $category=$_POST['category'];
  $admission=$_POST['admission'];
  $how_apply=$_POST['how_apply'];
  $scholarship=$_POST['scholarship'];
 
  
  //$college_img=$_FILES['college_img'];
  $filename_college=$_FILES['college_img']['name'];
$tmpfile=$_FILES['college_img']['tmp_name'];
 $college_img="".$filename_college;
  move_uploaded_file($tmpfile,$college_img);


 $query_college="insert into college (college_name,fees,location,rating,courses,speciality,category,college_img,description,keyfacts,admission,how_apply,scholarships) 
        values ('$college_name','$fees','$location','$rating','$courses','$speciality','$category','$college_img','$description','$keyfacts','  $admission','$how_apply','$scholarship')";
 $data=mysqli_query($conn,$query_college);
  if($data){ echo "<script>  pro_submit() </script> ";}
  
}
include("footer.php");



?>