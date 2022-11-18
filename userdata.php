<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$about=$_POST['about'];
$email=$_POST['email'];
$password=$_POST['password'];
$password= md5($password);

  
$query = "INSERT INTO userdata(fname, lname, phone, gender, about, email, password) VALUES('$fname','$lname','$phone','$gender','$about','$email','$password')";
  include 'util.php';
$conn=dbConnect(); 
$iquery= mysqli_query($conn,$query);

header("Location:account-home.php?successyes");
}
?>