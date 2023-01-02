<?php
include("../conn.php");

$id=$_GET["id"];



                    $query_delete="delete from adminlist where id='$id'";
                $data_delete=mysqli_query($conn,$query_delete);
                if($data_delete){
                    echo"  <script>  window.location='../admin_table.php'; </script>";

                }
                else{echo"  <script> alert(' data not Deleted') ; window.location='../admin_table.php'; </script>";

                }

            
 

?>