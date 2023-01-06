<?php 

	$server = "localhost";
	$user = "root";
	$password = "";
	$conn = new mysqli($server,$user,$password);

	if(!$conn->error){
		//create database if not exists
		$sql = "create database if not exists surge";
		$result = $conn->query($sql);

	
	
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
	}
?>
	