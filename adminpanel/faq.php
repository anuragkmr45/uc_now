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
        <h4 class="card-title">Add FAQs </table></table></h4>
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
				 </tr>
            </thead>
			<tbody>
              <tr >
                
                <td><input  type="text" required placeholder="Enter College Name" style="outline:none;text-align:center;margin:0px;padding:5px;border:none;min-width:1px;" name="college_name" >
                </td>
			</tr>
			</tbody>
			</table>
	
	   <table class="table  table-striped table-hover" style="text-align:center;margin-top:30px;width:100%">
            

            <thead style="margin-top:40px">
                          <tr style="padding-top:40px">
                            <th>Question</th>
							<th>Answer</th>
                          </tr>
			</thead>
			<tbody>
               <tr>
                <td text-align="center">
                   <textarea class="form-control" id="placeTextarea" required="" rows="2"  name="question" placeholder="Enter Questions" style="outline:none;margin:0px;height:50px;" >
                     
                   </textarea>
                </td>
              
                <td text-align="center">
                   <textarea class="form-control" id="placeTextarea" required="" rows="2"  name="answer" placeholder="Enter Answers" style="outline:none;margin:0px;height:50px;" >
                     
                   </textarea>
                </td>
              </tr>
			
			</tbody>
			</table>
			
			
	</div>
			
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
	</section>
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

if(isset($_POST['add']))
{
  $college_name=$_POST['college_name'];
  $question=$_POST['question'];
  $answer=$_POST['answer'];
  
  $query_college="insert into collegefaqs (college_name,questions,answers) values ('$college_name','$question','$answer')";
  $data=mysqli_query($conn,$query_college);
  if($data){ echo "<script>  pro_submit() </script> ";}
  
}
include("footer.php");



?>