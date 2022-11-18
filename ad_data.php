<?php
session_start();
include 'util.php';
$conn=dbConnect(); 
if (isset($_POST['submit']))
{
$category_group = $_POST['category_group'];
$category_type = $_POST['category_type'];
$ad_title = $_POST['ad_title'];
$ad_description = $_POST['ad_description'];
$price = $_POST['price'];


$location='ad_images/';
$picture1 = $_FILES['picture1']['name'];
$file_tmp1=$_FILES['picture1']['tmp_name'];
$picture2 = $_FILES['picture2']['name'];
$file_tmp2=$_FILES['picture2']['tmp_name'];
$picture3 = $_FILES['picture3']['name'];
$file_tmp3=$_FILES['picture3']['tmp_name'];
$picture4 = $_FILES['picture4']['name'];
$file_tmp4=$_FILES['picture4']['tmp_name'];
$picture5 = $_FILES['picture5']['name'];
$file_tmp5=$_FILES['picture5']['tmp_name'];
$data=[];
$data=[$picture2,$picture3,$picture4,$picture5];
$pictures=implode('', $data);

$seller_name = $_POST['seller_name'];
$seller_email = $_POST['seller_email'];
$seller_phone = $_POST['seller_phone'];
$seller_location = $_POST['seller_location'];
$seller_area = $_POST['seller_area'];
$seller_state = $_POST['seller_state'];


  $query = "INSERT INTO ad_detail(category_group, category_type, ad_title, ad_description, price, picture1, pictures, seller_name, seller_email, seller_phone, seller_location, seller_area, seller_state) VALUES('$category_group','$category_type','$ad_title','$ad_description','$price','$picture1','$pictures','$seller_name','$seller_email','$seller_phone','$seller_location','$seller_area','$seller_state')";
$iquery= mysqli_query($conn,$query);
if($iquery)
{
  
  move_uploaded_file($file_tmp1, $location.$picture1);
  move_uploaded_file($file_tmp2, $location.$picture2);
  move_uploaded_file($file_tmp3, $location.$picture3);
  move_uploaded_file($file_tmp4, $location.$picture4);
  move_uploaded_file($file_tmp5, $location.$picture5);
}



  header("Location:posting-success.php?successyes");
}
else{
  echo "error";
}
// header("Location:account-home.html?successyes");






?>

