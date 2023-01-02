<?php
include("../conn.php");

$id=$_GET["id"];



                $query_delete="delete from college where id='$id'";
                
                $data_delete=mysqli_query($conn,$query_delete);
                if($data_delete){
                    echo"  <script> window.location='../college.php'; </script>";

                }
                else{echo"  <script> alert(' data not Deleted') ; window.location='../college.php'; </script>";

                }

?>