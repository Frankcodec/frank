<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Become a Seller</title>
</head>
<body>
	<h1>Open Your Own Store</h1>
	<form method="POST" action="./process/processsubform.php">
		<input type="text" name="brandname" placeholder="Brand Name..." required="">
		<input type="number" name="whatsapps" placeholder="Whatsapp Number..." required="">
		<input type="text" name="social" placeholder="Social Media Handle1..." required="">
		<input type="text" name="socialtwo" placeholder="Social Media Handle2(optional)..." >
		<label>Tell Us a Little About Your brand</label>
		<textarea id="area" cols="5" rows="5"></textarea>
		<input type="hidden" name="company" id="hideo" required="">
		<input type="hidden" name="about" id="heist" required="">
		<label>What does your brand do?</label>
		<select id="selecte">
			<option>Sales of Clothings and accessories</option>
			<option>Service</option>
			<option>Sales of Food</option>
			<option>Sales of automobiles</option>
			<option>Sales of electrical appliances</option>
			<option>Sales of utensils</option>
			<option>Sales of furniture</option>
		</select>
		<input type="submit" name="" onclick="insert()">
	</form>
</body>
<style type="text/css">
	body{
		font-family: sans-serif;
		margin: 0;
		background-color: wheat;
		overflow: hidden;
	}
	form{
		width: 60%;
		margin: 10% 20%;
		margin-top: 0;
		padding: 15px 35px 15px 15px;
		border-radius: 15px;
		box-shadow: 1px 1px 19px -5px grey;
		display: flex;
		flex-direction: column;
		background-color: #fff;
	}
	input[type = text], input[type = number]{
		margin-bottom: 15px;
		border: none;
		border-bottom: 1px solid black;
		width: 100%;
		height: 35px;
		font-size: 19px;
		padding: 5px;
	}
	input[type = file]{
		border: none;
		border-bottom: none;
	}
	input[type = submit]{
		border: none;
		width: 125px;
		height: 45px;
		background-color: #047aed;
		border-radius: 15px;
		color: #fff;
		font-size: 16px;
		margin-left: 50%;
		margin-top: 35px;
		transform: translate(-50%, -50%);
	}
	h1{
		text-align: center;
		font-family: Millik;
		font-size: 45px;
		color: #047aed; 
		margin-top: 10%;
	}
	textarea{
		margin-top: 10px;
		width: 100%;
		margin-bottom: 15px;
		font-size: 14px;
		line-height: 15px;
	}
	select{
		width: 100.5%;
		height: 35px;
		margin-top: 10px;
		margin-bottom: 15px;
		font-size: 16px;
	}
	option{
		height: 25px;
		font-size: 16px;
	}
</style>
<script type="text/javascript">
    function insert() {
    	var select = document.getElementById('selecte').value;
    document.getElementById('hideo').value = select;
  		var text = document.getElementById('area').value;
  		document.getElementById('heist').value = text;
    }
</script>
</html>