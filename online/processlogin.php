<?php 
session_start();
include_once './process/dbconnect.php';
$email = $_POST["email"];
$password = $_POST["password"];


$sql = "select * from user where email = '$email' or phone = '$email' ";
$result = $conn->query($sql);

	if($result->num_rows>0){
		while($rows = $result->fetch_assoc()){
			//confirm password
			if($rows["password"] == $password || $rows["password"] == $tel){
				$_SESSION["username"] = $rows["firstname"]." " .$rows["lastname"];
				echo $_SESSION["name"];
				$_SESSION["userid"] = $rows["userID"];
				$_SESSION["profilepic"] = $rows['profilepic'];
				$_SESSION["useremail"] = $rows['email'];
                $_SESSION["phone"] = $rows['phone'];
				header("location:dashboard.php");
			}
			else{
				echo "<script>
						alert('invalid Password');
						window.location.replace('login.php');
					</script>";
			}
		}
	}
	else{
		echo "<script>
				alert('invalid user email');
				window.location.replace('login.php');
			</script>";
	}
?>