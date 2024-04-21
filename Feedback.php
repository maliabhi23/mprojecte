<?php
$name=$_POST["name"];
$surname=$_POST["surname"];
$emails=$_POST["email"];
$message=$_POST["message"];
$cleanliness = $_POST['cleanliness'];
$staff = $_POST['staff'];
$amenities = $_POST['amenities'];

$conn =new mysqli('localhost','root','root','mayi');
//$q="INSERT INTO `inse` (`Name`, `Surname`, `Email`, `message`) VALUES ('m', 'oooo', 'mmmmkdjekm', 'iii')";
$q ="INSERT INTO inse (Name, Surname, Email, message, cleanliness, staff, amenities) VALUES ('$name', '$surname', '$emails', '$message', '$cleanliness', '$staff', '$amenities')";


mysqli_query($conn,$q);
if($q)
{
   echo ' <script>alert("Submited FeedBack SuccessFully");</script>';
}
else{
    echo"none";
}
?>
