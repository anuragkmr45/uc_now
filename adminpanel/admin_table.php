
<?php

include("header.php");
include("conn.php");

?>

    <div class="app-content content">
      <div class="content-wrapper" >
        <div class="content-wrapper-before" ></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title"> Admin Details</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Admin
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
<section>    <!--------------------- add admin sec ----------------->
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Add a new admin</table></table></h4>
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
        <form method="GET">  
          

          <table class="table  table-striped table-hover" style="text-align:center;">
            

            <thead style="margin-top:40px">
                          <tr style="padding-top:40px">
                            <th>Admin name</th>
                            <th>Expiry Date</th>
                            <th>Submit</th>
                          </tr>
            </thead>
             <tbody>
              <tr >
                <td><input type="text" placeholder="Enter Username" style="text-align:center;margin:0px;padding:5px;border:none;width:300px"name="new_ad_nm" >
                </td>
                <td><input  type="text" placeholder="Enter Password" style="text-align:center;margin:0px;padding:5px;border:none;min-width:1px;"name="new_ad_pss" >
                </td>
                
                <td style="width:600px"><button name="add"id="add" type="submit"class='btn btn-glow btn-bg-gradient-x-purple-blue round update '>submit</button> </td>
              </tr>
            </tbody>
            
          </table>
</form>
          
        </div>
      </div>
    </div>
  </div>
</div>		
</section>    <!--------------------- add admin sec ----------------->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                        <script src ="AgroAdmin/additional_css/app-assets/vendors/js/extensions/sweetalert2.all.js"></script>
                        <script src ="AgroAdmin/additional_css/app-assets/js/scripts/extensions/sweet-alerts.min.js"></script>
<script>  function pro_submit(){
                        swal({
                                title: "Done!",
                                text: "New admin is added",
                                icon: "success",
                                button: "ok",
                                }).then(function(){ window.location='admin_table.php'; });
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

if(isset($_GET['add'])){
  $new_ad_nm=$_GET['new_ad_nm'];
  $new_ad_pss=$_GET['new_ad_pss'];

  $que="insert into adminlist (admin,password) values ('$new_ad_nm','$new_ad_pss')";
  $dat=mysqli_query($conn,$que);
  if($dat){ echo "<script>  pro_submit() </script> ";}
  
}
?>


<section>      <!--------------------- show admin sec ----------------->
                    <div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">UncoverCampus Admins</h4>
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
					
				</div>
				<div class="table-responsive" style="padding-left:20px,margin-left:20px">
					<table class="table table-striped">
						<tr>
                            <th>Admin</th>
                            <th>Password</th>
                            <th>Delete</th>
                        </tr>   
                        <?php  
                        
                          $query=mysqli_query($conn,"select * from adminlist");

                         while ($result_tofetch_tbladmin=mysqli_fetch_array($query)) {
                            echo " 
                                   <tr>
                                        <td>" .$result_tofetch_tbladmin['admin']."</td> 
                                        <td>".$result_tofetch_tbladmin['password']."</td> 
                                        
                                        <td>
                                            <a class='delete_btn' href='delete_update_query/delete_from_tbladmin.php?id=".$result_tofetch_tbladmin['id']."'>
                                                 <button class='btn btn-bg-gradient-x-purple-red btn-round delete_btn'>Delete</button>
                                            </a>
                                            
                                        </td>
                                   </tr>
                                         
                            
                            ";
                        }
                        ?>
                        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                        <script src ="AgroAdmin/additional_css/app-assets/vendors/js/extensions/sweetalert2.all.js"></script>
                        <script src ="AgroAdmin/additional_css/app-assets/js/scripts/extensions/sweet-alerts.min.js"></script>
                        <script>
                                  $('.delete_btn').on('click',function(e){
                                    e.preventDefault();
                                    const href=$(this).attr('href')

                                    Swal.fire({
                                              title: 'Are you sure?',
                                              text: "You won't be able to revert this!",
                                              icon: 'warning',
                                              showCancelButton: true,
                                              confirmButtonColor: '#3085d6',
                                              cancelButtonColor: '#d33',
                                              confirmButtonText: 'Yes, delete it!'
                                            }).then((result) => {
                                              if (result.isConfirmed) {
                                                Swal.fire(
                                                  'Deleted!',
                                                  'Your file has been deleted.',
                                                  'success'
                                                )
                                                setTimeout(()=>{document.location.href= href},800);
                                              }
                                            })
                                  });
                        </script>
						
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

</section>

        </div>
      </div>
    </div>


<?php
include("footer.php");
?>
