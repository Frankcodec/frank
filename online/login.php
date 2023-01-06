<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Interface</title>
	<style type="text/css">
	
		body {
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
    animation: gradient 12s ease infinite;
}

@keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}
		form{
			display: flex;
			flex-direction: column;
			justify-content: center;
			font-family: sans-serif;
			box-shadow: 1px 1px 25px -2px grey;
			width: 30%;
			margin: 0 35%;
			padding: 8px;
			border-radius: 15px;
			margin-top: 25px;
			background-color: #fff;
		}
		input{
			height: 25px;
			padding: 11px;
			font-size: 16px;
			margin: 5px;
			border: none;
			border-bottom: 1px solid black;
			outline: none;
		}
		#submit{
			height: 55px;
			background-color: #215;
			color: #fff;
			width: 135px;
			border-radius: 15px;
			margin-left: 35%;
			margin-top: 17px;
		}
		h3{
			text-align: center;
		}
		h1{
			color: #fff;
			text-align: center;
			width: 50%;
			margin: 0 25.5%;
			font-family: Millik;
			margin-bottom: 25px;
			margin-top: 255px;
			font-size: 55px;
		}
		#account{
			color: orange;
		}
		a{
			text-decoration: none;
		}
		#visible{
			display: grid;
			grid-template-columns: 95% 5%;
		}
		#check{
			padding: 0px;
			margin: 0px;
			margin-top: 25px;
		}
	</style>
</head>
<body>
	<h1>Log in to your <span id="account">account</span></h1>
	<form action="processlogin.php" method="post">
			<input type="text" name="email" required placeholder="Email or Phone number...">
			<div id="visible">
			<input type="password" id="pass" name="password" required placeholder="Password...">
			<input type="checkbox" id="check" name="" onclick="myFunction()"></div>
			<input type="submit" value="Log in" id="submit">
			<h3>Don't have an account? <a href="signup.php">Create one now</a></h3>
	</form>
</body>
<script type="text/javascript">
	function myFunction() {
 var x = document.getElementById("pass");
 if (x.type === "password") {
 x.type = "text";
 } else {
 x.type = "password";
 }
}
</script>
</html>
