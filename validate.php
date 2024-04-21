<?php
$username=$_POST["username"];
$password=$_POST["password"];

if($username=="abhimali656@gmail.com"and $password==123)
{
    echo ' <script>alert("Submited FeedBack SuccessFully");</script>';
    header("location:view.php");
}
else{
    echo ' <script>alert("Password Not Correct");</script>';
   // header("location:validate.php");
}
?>
