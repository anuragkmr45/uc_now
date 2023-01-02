
<?php

include("header.php");
include("conn.php");

?>

    <div class="app-content content">
      <div class="content-wrapper" >
        <div class="content-wrapper-before" ></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">PG Finder </h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">PGs
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
                    <div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">list of all Collegs</h4>
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
				<div class="table-responsive">
					<table class="table table-striped"style="text-align: center;" valign="center">
						<tr>
                            <th>College Image</th>
                            <th>College Name</th>
                            <th>Courses</th>
                            <th>Location</th>
                            <th>Fees</th>
                            <th>Speciality</th>
                            <th>Rating</th>
                            <th>Description</th>
                            <th style="text-align: center;">Update</th>
                            <th style="text-align: center;">Delete</th>
              </tr>
                        <?php 
                        
                              $query_college=mysqli_query($conn,"select * from college");						
                              while ($result=mysqli_fetch_array($query_college)) {
                                  echo "<tr>
                                              <td>" .$result['college_name']." 
                                                  <a href='product_img/college_finder/".$result['college_img']."'>
                                                  <image style='height:100px' src='product_img/college_finder/".$result['college_img']."'>
                                                  </a>
                                              </td>
                                              <td>".$result['college_name']."</td> 
                                              <td>".$result['courses']."</td>
                                              <td>".$result['location']."</td>
                                              <td>".$result['fees']."</td>
                                              <td>".$result['speciality']."</td>
                                              <td>".$result['rating']."</td>
                                              <td>".$result['description']."</td>
                                              <td >
                                                <a class='update_btn' href='college_update.php?id=".$result['id']."'>	
                                                  <button class='btn btn-glow btn-bg-gradient-x-purple-blue round '>Update</button> 
                                                </a>
                                              </td>
                                              <td >
                                                <a class='delete_btn' href='delete_update_query/delete_from_college.php?id=".$result['id']."'>	
                                                  <button class='btn-bg-gradient-x-purple-red btn btn-glow round  '>Delete</button> 
                                                </a>
                                              </td>
                                              
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
					            	<script>
                                  $('.update_btn').on('click',function(e){
                                    e.preventDefault();
                                    const href=$(this).attr('href')

                                    Swal.fire({
                                              title: 'Are you sure?',
                                              text: "You really want to update!",
                                              icon: 'info',
                                              showCancelButton: true,
                                              confirmButtonColor: '#3085d6',
                                              cancelButtonColor: '#d33',
                                              confirmButtonText: 'Yes, update!'
                                            }).then((result) => {
                                              if (result.isConfirmed) {document.location.href= href
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
