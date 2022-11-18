<?php
$fname=$_REQUEST['fname'];
// $email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$password= md5($password);
include 'util.php';
$conn=dbConnect();
$sql_check="SELECT s_no, fname,  password FROM userdata WHERE fname='$fname' and  password='$password' ";
$rs_data=mysqli_query($conn,$sql_check);

if($rs_data->num_rows>0)
{
    $rowdata=mysqli_fetch_assoc($rs_data);
    // set the session
    session_start();
    $_SESSION['sess_uid']=$rowdata['s_no'];
    $_SESSION['sess_fname']=$fname;
    // $_SESSION['sess_email']=$email;
    header("Location:index-v-2.php");
}
else
{
    header("Location:login.php?login_attempt=1");
}
?>