<?php 
include './database/dbconnect.php';
/*include_once './online/database/tables.php';*/

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$dob = $_POST["dob"];
$address = $_POST["address"];
$gender = $_POST["gender"];
$password = $_POST["password"];


$sql = "insert into user (firstname, lastname, email, phone, dob, address, gender, password)
values
('$fname', '$lname', '$email', '$tel', '$dob', '$address', '$gender', '$password');";

$result = $conn->query($sql);
if($conn->error){
				echo "<br>".$conn->error;
			}


			$sql2 = "create table if not exists users (
						sno int not null primary key auto_increment,
						userID varchar(6) not null unique,
						firstname varchar(50) not null,
						lastname varchar(50) not null,
						gender int(1) not null,
						email varchar(50) not null unique,
						phone varchar(20) not null,
						address text not null,
						password text not null
					)";
			$result2 = $conn->query($sql2);
			if($conn->error){
				echo "<br>".$conn->error;
			}
?>