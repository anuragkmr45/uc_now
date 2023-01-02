<?php
include("../conn.php");

$id=$_GET["id"];



                $query_delete="delete from campus where id='$id'";
                
                $data_delete=mysqli_query($conn,$query_delete);
                if($data_delete){
                    echo"  <script> window.location='../campus.php'; </script>";

                }
                else{echo"  <script> alert(' data not Deleted') ; window.location='../campus.php'; </script>";

                }
                  //-----------  sarthak reminder-> commenting this so you can not delete it for real ----------   
            


///////////////////////////////////////////////////// DELETE THIS //////////////////////////////// TESTING PURPOSE /////////////////////////
 /*           $query_delete="delete from pg where id='$id'";            
            if($query_delete){
                echo"  <script>alert('yes data can be Deleted, if you wan to do it go to delete_from_pg.php') ; window.location='../pg.php'; </script>";

            }
            else{echo"  <script> alert(' data not Deleted') ; window.location='../pg.php'; </script>";

            }
*/
////////////////////////////////////////////// DELETE THIS //////////////////////////////// TESTING PURPOSE /////////////////////////
 

?>