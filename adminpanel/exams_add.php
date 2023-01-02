<?php

include("header.php");
include("conn.php");



?>
                        


  <div class="app-content content">
      <div class="content-wrapper" >
        <div class="content-wrapper-before" ></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Exams</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Examd
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
        <h4 class="card-title">Add new Exams</table></table></h4>
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

          <table class="table table-striped table-hover" style="text-align:center;margin-top:30px;width:100%">
            

            <thead style="margin-top:40px">
                          <tr style="padding-top:40px">
                            <th>Exam Name</th>
                            <th style="padding-right:0px" >Exam Details Short</th>
                            <th>Categories</th>
                          </tr>
            </thead>
             <tbody>
              <tr >
                <td><input  type="text" class="form-control position-inside-maxlength" required placeholder="Enter Exam Name(Max. 25)" id="maxlength-position-inside" maxlength="25" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="exam_name"  >
                </td>
                <td><input  type="text" class="form-control round position-inside-maxlength" required placeholder="Enter short description(max.90)" id="maxlength-position-inside" maxlength="100" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="exam_details_short" >
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
          <table class="table table-striped table-hover" style="text-align:center;margin-top:30px;width:100%">
            

            <thead style="margin-top:40px">
                          <tr style="padding-top:40px">
                            <th>Exam Conducting Authority</th>
                            <th style="padding-right:0px" >Cycle Of Examination</th>
                            <th>Mode Of Application</th>
                          </tr>
            </thead>
             <tbody>
              <tr>
                <td><input  type="text" class="form-control position-inside-maxlength" required placeholder="Enter Exam Authority Name" id="maxlength-position-inside" maxlength="60" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="exam_authority"  >
                </td>
                <td><input  type="text" class="form-control round position-inside-maxlength" required placeholder="Enter Exam Cycle" id="maxlength-position-inside" maxlength="100" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="exam_cycle" >
                </td>
                <td><input  type="text" class="form-control round position-inside-maxlength" required placeholder="Enter Application Mode" id="maxlength-position-inside" maxlength="100" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="application_mode" >
                </td>
              </tr>
            </tbody>
            
          </table>
          <table class="table table-striped table-hover" style="text-align:center;margin-top:30px;width:100%">
            

            <thead style="margin-top:40px">
                          <tr style="padding-top:40px">
                            <th>Date Of Exam</th>
                            <th style="padding-right:0px" >Mode Of Exam</th>
                            <th>Courses Offered</th>
                          </tr>
            </thead>
             <tbody>
              <tr>
                <td><input  type="date" class="form-control position-inside-maxlength" required placeholder="Enter Exam Date" id="maxlength-position-inside" maxlength="60" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="exam_date"  >
                </td>
                <td><input  type="text" class="form-control round position-inside-maxlength" required placeholder="Enter Exam Mode" id="maxlength-position-inside" maxlength="100" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="exam_mode" >
                </td>
                <td><input  type="text" class="form-control round position-inside-maxlength" required placeholder="Enter Courses" id="maxlength-position-inside" maxlength="100" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="courses" >
                </td>
              </tr>
            </tbody>
            
          </table>
          <table class="table table-striped table-hover" style="text-align:center;margin-top:30px;width:100%">
            

            <thead style="margin-top:40px">
                          <tr style="padding-top:40px">
                            <th>Application Form Release Date</th>
                            <th style="padding-right:0px" >Last Day For Registration</th>
                            <th>Last Day To Pay Fee</th>
                          </tr>
            </thead>
             <tbody>
              <tr>
                <td><input  type="date" class="form-control position-inside-maxlength" required placeholder="Enter Application Form Release Date" id="maxlength-position-inside" maxlength="60" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="release_date"  >
                </td>
                <td><input  type="date" class="form-control round position-inside-maxlength" required placeholder="Enter Last Registration Date" id="maxlength-position-inside" maxlength="100" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="last_register" >
                </td>
                <td><input  type="date" class="form-control round position-inside-maxlength" required placeholder="Enter Fee Payment Date" id="maxlength-position-inside" maxlength="100" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="last_fee" >
                </td>
              </tr>
            </tbody>
            
          </table>
          <table class="table table-striped table-hover" style="text-align:center;margin-top:30px;width:100%">
            

            <thead style="margin-top:40px">
                          <tr style="padding-top:40px">
                            <th>Form Correction Date</th>
                            <th style="padding-right:0px" >Admit Card Release Date</th>
                            <th>Result Declaration Date</th>
                          </tr>
            </thead>
             <tbody>
              <tr>
                <td><input  type="date" class="form-control position-inside-maxlength" required placeholder="Enter Form Correction Date" id="maxlength-position-inside" maxlength="60" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="correction"  >
                </td>
                <td><input  type="date" class="form-control round position-inside-maxlength" required placeholder="Enter Admit Card Release Date" id="maxlength-position-inside" maxlength="100" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="admit_date" >
                </td>
                <td><input  type="date" class="form-control round position-inside-maxlength" required placeholder="Enter Result Declaration Date" id="maxlength-position-inside" maxlength="100" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="result_date" >
                </td>
              </tr>
            </tbody>
            
          </table>
          <table class="table  table-striped table-hover" style="text-align:left;margin-top:30px;width:100%">
            

              <thead style="margin-top:40px;text-align: center;">
                          <tr style="padding-top:40px">
                            <th>Exam Details Full</th>
                          </tr>
            </thead>
              <tbody>
                <td text-align="center">
                   <textarea class="form-control " id="placeTextarea" required="" rows="3"  name="exam_details_full" placeholder="Enter Exam Details" style="outline:none;margin:0px;height:300px;" >      
                   </textarea>
                </td>
              </tbody>  
          </table>
          
           <table class="table  table-striped table-hover" style="text-align:left;margin-top:30px;width:100%">
            
              <!-- <thead style="margin-top:40px;text-align: center;">
                            <tr style="padding-top:40px;">
                              <th>Submit</th>
                            </tr>
              </thead> -->
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
                                text: "Your Exam is added",
                                icon: "success",
                                button: "ok",
                                }).then(function(){ window.location='exams.php'; });
                    }
                     function pro_not_submit(){
                        swal({
                                title: "Not Done!",
                                text: "Your Exam is not added",
                                icon: "error",
                                button: "ok",
                                }).then(function(){ window.location='exams.php'; });
                    }
                    
 </script>
<?php 

if(isset($_POST['submit'])){
  $exam_name=$_POST['exam_name'];
  $exam_details_short=$_POST['exam_details_short'];
  $exam_details_full=$_POST['exam_details_full'];
  $category=$_POST['category'];
  $exam_authority=$_POST['exam_authority'];
  $exam_cycle=$_POST['exam_cycle'];
  $application_mode=$_POST['application_mode'];
  $exam_date=$_POST['exam_date'];
  $exam_mode=$_POST['exam_mode'];
  $course=$_POST['courses'];
  $release_date=$_POST['release_date'];
  $last_register=$_POST['last_register'];
  $last_fee=$_POST['last_fee'];
  $correction=$_POST['correction'];
  $admit_date=$_POST['admit_date'];
  $result_date=$_POST['result_date'];

 $query="insert into exams (exam_name,exam_details_short,exam_details_full,category,exam_authority,exam_cycle,application_mode,exam_date,exam_mode,courses,release_date,last_register,last_fee,correction,admit_date,result_date) values ('$exam_name','$exam_details_short','$exam_details_full','$category','$exam_authority','$exam_cycle','$application_mode','$exam_date','$exam_mode','$course','$release_date','$last_register','$last_fee','$correction','$admit_date','$result_date')";
 $data=mysqli_query($conn,$query);
  if($data){ echo "<script>  pro_submit() </script> ";}
  else{ echo "<script> pro_not_submit() </script> ";} 
}

include("footer.php");

?>