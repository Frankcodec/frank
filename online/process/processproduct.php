<?php 
session_start();
include '../database/dbconnect.php';

$email = $_SESSION["useremail"];
$phone = $_SESSION["phone"]  ;
$brandlogo = $_POST["brandlogo"];
$branchaddress = $_POST["branch"];
$bargain = $_POST["bargain"];
$productname = $_POST["productname"];
$productprice = $_POST["productprice"];
$productdescrip = $_POST["description"];
$productamount = $_POST["productamount"];
$producttype = $_POST["producttype"];
$brandname = $_POST["brandname"];
$receiveoption = $_POST["receiveoption"];
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "../images/" . $filename;


$sql = "insert into product (brandname, email, phone, branch_address, profilepic, product_name, product_price, bargain, producttype, product, receive, productdescrip, productqty)
values ('$brandname', '$email', '$phone', '$branchaddress', '$brandlogo', '$productname', '$productprice', '$bargain', '$producttype', '$filename', '$receiveoption', '$productdescrip', '$productamount')";

$result=$conn->query($sql);
if (move_uploaded_file($tempname, $folder)) {
echo "<h3> Image uploaded successfully!</h3>";
} else {
echo "<h3> Failed to upload image!</h3>";
} 
if ($conn->error) {
	echo "<br>".$conn->error;
}
else if (!$conn->error) {
header("location:../dashboard.php");
}
?>