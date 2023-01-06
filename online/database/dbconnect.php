<?php 
$server = "localhost";
	$user = "root";
	$password = "";
	$db = "surge";
	$conn = new mysqli($server,$user,$password,$db);

		
			$sql2 = "create table if not exists user (
						sno int not null primary key auto_increment,
						userID varchar(6) not null,
						firstname varchar(50) not null,
						lastname varchar(50) not null,
						gender int(1) null,
						email varchar(50) not null unique,
						phone varchar(20) not null,
						address text not null,
						password text not null,
						dob text not null
					)";
			$result2 = $conn->query($sql2);
			if($conn->error){
				echo "<br>".$conn->error;
			}
			$sql3 = "create table if not exists product (
						sno int(99) not null primary key auto_increment,
						productID varchar(6) not null,
						brandname varchar(50) not null,
						email varchar(50) not null,
						phone varchar(20) not null,
						branch_address text not null,
						profilepic varchar(99) not null,
						product varchar(99) not null,
						product_name varchar(55) not null,
						product_price varchar(55) not null,
						bargain varchar(55) not null,
						producttype varchar(55) not null,
						receive varchar(99) not null,
						productdescrip varchar(9999) not null
					)";
			$result3 = $conn->query($sql3);
			if($conn->error){
				echo "<br>".$conn->error;
			}

			$sql4 = "create table if not exists seller(
						sno int not null primary key auto_increment,
						userID varchar(6) not null,
						name varchar(50) not null,
						whatsapp varchar(12) not null,
						social varchar(50) not null,
						social2 varchar(50) not null,
						email varchar(50) not null unique,
						phone varchar(20) not null,
						address text not null,
						about text not null, 
						brandname varchar(55) not null,          
						companytype varchar(55) not null
					)";
			$result4 = $conn->query($sql4);
			if($conn->error){
				echo "<br>".$conn->error;
			}
?>