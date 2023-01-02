<?php
$conn=mysqli_connect("localhost","u808479902_uc","Uncover12","u808479902_uncovercampus");

//if($conn)
//echo "connected";

if(isset($_POST["submit"]))
{
 $fname=$_POST["fname"];
 $lname=$_POST["lname"];
 $email=$_POST["email"];
 $phone=$_POST["phone"];
 $msg=$_POST["message"];

 $query="insert into contact(fname,lname,email,phone,message) values('$fname','$lname','$email','$phone','$msg')";
 $data=mysqli_query($conn,$query);
 if($data){
    echo '<script> swal("Message Sent","Thank you for contacting us","success");
    </script>';
}
else{
   echo '<script> swal("Something went wrong","plz try again","error");
   </script>';
}
}
?>