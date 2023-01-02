<?php
session_start();
include("header.php");
include("conn.php");
//error_reporting('0');
$id=$_GET['id'];

$query=mysqli_query($conn,"select * from exams where id='$id'");
$result=mysqli_fetch_array($query);

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
                  <li class="breadcrumb-item"><a href="dashboard2.php">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Exams
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
                            <th style="padding-right:90px" >Exam Details Short</th>
                          </tr>
            </thead>
             <tbody>
              <tr >
                <td><input  type="text" class="form-control position-inside-maxlength" required placeholder="Enter Exam Name(Max. 25)" id="maxlength-position-inside" maxlength="25" style="text-align:center;margin:0px;padding:5px;border:none;min-width:1px;float:left"name="exam_name" value="<?php echo$result['exam_name'] ?>"  >
                </td>
                <td><input  type="text" class="form-control position-inside-maxlength" required placeholder="Enter short description(max.70)" id="maxlength-position-inside" maxlength="70" style="text-align:center;margin:0px;padding:5px;border:none;min-width:1px;float:left"name="exam_details_short" value="<?php echo$result['exam_details_short'] ?>" >
                </td>
              </tr>
            </tbody>
            
          </table>
          <table class="table table-striped table-hover" style="text-align:center;margin-top:30px;width:100%">
            

            <thead style="margin-top:0px">
                          <tr style="padding-top:0px">
                            <th>Exam Conducting Authority</th>
                            <th style="padding-right:0px" >Cycle Of Exam</th>
                            <th>Mode Of Application</th>
                          </tr>
            </thead>
             <tbody>
              <tr >
                <td><input  type="text" class="form-control position-inside-maxlength" required placeholder="Enter Exam Conducting Authority(Max. 25)" id="maxlength-position-inside" maxlength="25" style="text-align:center;margin:0px;padding:5px;border:none;min-width:1px;float:left"name="exam_authority" value="<?php echo$result['exam_authority'] ?>"  >
                </td>
                <td><input  type="text" class="form-control position-inside-maxlength" required placeholder="Enter Exam Cycle(max.70)" id="maxlength-position-inside" maxlength="70" style="text-align:center;margin:0px;padding:5px;border:none;min-width:1px;float:left"name="exam_cycle" value="<?php echo$result['exam_cycle'] ?>" >
                </td>
                <td><input  type="text" class="form-control position-inside-maxlength" required placeholder="Enter Application Mode" id="maxlength-position-inside" maxlength="70" style="text-align:center;margin:0px;padding:5px;border:none;min-width:1px;float:left"name="application_mode" value="<?php echo$result['application_mode'] ?>" >
                </td>
              </tr>
            </tbody>
            
          </table>
          <table class="table table-striped table-hover" style="text-align:center;margin-top:0px;width:100%">
            

            <thead style="margin-top:0px">
                          <tr style="padding-top:0px">
                            <th>Date Of Exam</th>
                            <th style="padding-right:0px" >Mode Of Exam</th>
                            <th>Courses Offered</th>
                          </tr>
            </thead>
             <tbody>
              <tr>
                <td><input  type="date" class="form-control position-inside-maxlength" required placeholder="Enter Exam Date" id="maxlength-position-inside" maxlength="60" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="exam_date" value="<?php echo$result['exam_date'] ?>" >
                </td>
                <td><input  type="text" class="form-control round position-inside-maxlength" required placeholder="Enter Exam Mode" id="maxlength-position-inside" maxlength="100" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="exam_mode" value="<?php echo$result['exam_mode'] ?>">
                </td>
                <td><input  type="text" class="form-control round position-inside-maxlength" required placeholder="Enter Courses" id="maxlength-position-inside" maxlength="100" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="courses" value="<?php echo$result['courses'] ?>">
                </td>
              </tr>
            </tbody>
            
          </table>
          <table class="table table-striped table-hover" style="text-align:center;margin-top:0px;width:100%">
            

            <thead style="margin-top:40px">
                          <tr style="padding-top:40px">
                            <th>Application Form Release Date</th>
                            <th style="padding-right:0px" >Last Day For Registration</th>
                            <th>Last Day To Pay Fee</th>
                          </tr>
            </thead>
             <tbody>
              <tr>
                <td><input  type="date" class="form-control position-inside-maxlength" required placeholder="Enter Application Form Release Date" id="maxlength-position-inside" maxlength="60" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="release_date" value="<?php echo$result['release_date'] ?>">
                </td>
                <td><input  type="date" class="form-control round position-inside-maxlength" required placeholder="Enter Last Registration Date" id="maxlength-position-inside" maxlength="100" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="last_register" value="<?php echo$result['last_register'] ?>">
                </td>
                <td><input  type="date" class="form-control round position-inside-maxlength" required placeholder="Enter Fee Payment Date" id="maxlength-position-inside" maxlength="100" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="last_fee" value="<?php echo$result['last_fee'] ?>">
                </td>
              </tr>
            </tbody>
            
          </table>
          <table class="table table-striped table-hover" style="text-align:center;margin-top:0px;width:100%">
            

            <thead style="margin-top:0px">
                          <tr style="padding-top:0px">
                            <th>Form Correction Date</th>
                            <th style="padding-right:0px" >Admit Card Release Date</th>
                            <th>Result Declaration Date</th>
                          </tr>
            </thead>
             <tbody>
              <tr>
                <td><input  type="date" class="form-control position-inside-maxlength" required placeholder="Enter Form Correction Date" id="maxlength-position-inside" maxlength="60" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="correction" value="<?php echo$result['correction'] ?>">
                </td>
                <td><input  type="date" class="form-control round position-inside-maxlength" required placeholder="Enter Admit Card Release Date" id="maxlength-position-inside" maxlength="100" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="admit_date" value="<?php echo$result['admit_date'] ?>">
                </td>
                <td><input  type="date" class="form-control round position-inside-maxlength" required placeholder="Enter Result Declaration Date" id="maxlength-position-inside" maxlength="100" style="text-align:center;margin:0px;padding:5px;border:none;float:left"name="result_date" value="<?php echo$result['result_date'] ?>">
                </td>
              </tr>
            </tbody>
            
          </table>
          <table class="table  table-striped table-hover" style="text-align:left;margin-top:0px;width:100%">
            

              <thead style="margin-top:0px;text-align: center;">
                          <tr style="padding-top:0px">
                            <th>Exam Details Full</th>
                          </tr>
            </thead>
              <tbody>
                <td text-align="center">
                   <textarea class="form-control " id="placeTextarea" required="" rows="3"  name="exam_details_full" placeholder="Enter Exam Details" style="outline:none;margin:0px;height:300px;" value="<?php echo$result['description'] ?>" >  
                   <?php echo$result['exam_details_full'] ?>  
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
                      
                       <td align="center" ><button name="update" id="update" type="update" class='btn btn-glow btn-bg-gradient-x-purple-blue round update'>Update</button> </td>
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
                                text: "Your Record is updated",
                                icon: "success",
                                button: "ok",
                                }).then(function(){ window.location='exams.php'; });
                    }
                    function pro_not_submit(){
                        swal({
                                title: "Not Updated!",
                                text: "Your record is not updated",
                                icon: "error",
                                button: "ok",
                                }).then(function(){ window.location='exams.php'; });
                    }
                    
 </script>
<?php 

if(isset($_POST['update'])){

  $exam_name=$_POST['exam_name'];
  $exam_details_short=$_POST['exam_details_short'];
  $exam_details_full=$_POST['exam_details_full'];
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

  echo $id."<br>";echo $exam_name."<br>";echo $exam_details_short."<br>";echo $exam_details_full."<br>";


                                              
       $query_exams="update exams set exam_name='$exam_name',exam_details_short='$exam_details_short',exam_details_full='$exam_details_full',exam_authority='$exam_authority',exam_cycle='$exam_cycle',application_mode='$application_mode',exam_date='$exam_date',exam_mode='$exam_mode',courses='$course',release_date='$release_date',last_register='$last_register',last_fee='$last_fee',correction='$correction',admit_date='$admit_date',result_date='$result_date' where id='$id'";

        $data=mysqli_query($conn,$query_exams);

        if($data){ echo "<script> pro_submit() </script> ";}
        else{
          echo "<script> pro_not_submit() </script> ";
        }

   }   
          

include("footer.php");



?>