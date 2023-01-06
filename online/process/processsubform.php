<?php 
session_start();
include_once '../database/dbconnect.php';
$name = $_SESSION["username"];
$email = $_SESSION["useremail"];
$phone = $_SESSION["phone"];
$brand = $_POST["brandname"];
$whatsapps = $_POST["whatsapps"];
$social1 = $_POST["social"];
$social2 = $_POST["socialtwo"];
$company = $_POST["company"];
$about = $_POST["about"];


$sql = "insert into seller (name, email, phone, brandname, whatsapp, social, social2, companytype, about) 
values 
('$name', '$email', '$phone', '$brand', '$whatsapps', '$social1', '$social2', '$company', '$about')";

$result=$conn->query($sql);
header("location:dashboard.php");
if($conn->error){
				echo "<br>".$conn->error;
				echo "<script>window.location.replace('subform.php');</script>";
			}
?>