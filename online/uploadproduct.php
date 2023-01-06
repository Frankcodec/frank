<?php 
session_start();

include_once './database/dbconnect.php';
$name = $_SESSION["username"];

$sql = "select * from seller where name = '$name' ";
$result=$conn->query($sql);

if ($result->num_rows > 0) {
	while ($rows = $result->fetch_assoc()) {
		$_SESSION["brandname"] = $rows["brandname"];
		$_SESSION["brandlogo"] = $rows["brandlogo"];
	}
}
$brand = $_SESSION["brandname"];
$brandlogo = $_SESSION["brandlogo"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload Your Produsts</title>
</head>
<body>
	<div class="content">
	<h1 style="color: #047aed">Upload Your Products</h1>
	<form method="POST" action="./process/processproduct.php" enctype="multipart/form-data">
		<input type="text" name="productname" placeholder="Product name">
		<input type="text" name="productprice" placeholder="Product Price">
		<input type="text" name="bargain" placeholder="bargainable price(optional)">
		<input type="text" name="productamount" placeholder="Quantity of this product available" id="file">
		<input type="file" name="uploadfile" id="files" value="" onchange="show()">
        <img src="" id="img">
		<input type="hidden" name="brandlogo" value="">
		<label>How should the customers receive this product</label>
		<select id="select" onchange="salt()">
			<option>Delivery</option>
			<option>Pickup from a store</option>
			<option>Both</option>
		</select>
		 	<input type="text" name="branch" id="none" placeholder="Enter the pickup address" style="display: none;">
		 	<input type="hidden" name="receiveoption" id="receive">
		<label>Tell us what kind of product this is</label>
		<select id="seperate">
			<option>Fashion</option>
			<option>Appliances</option>
			<option>Health</option>
			<option>Foods</option>
			<option>Interiors</option>
			<option>Devices</option>
			<option>Books & Lifestyle</option>
			<option>Other</option>
		</select>
		<label>Product Description</label> 
		<textarea cols="5" rows="5" id="area"></textarea>         
		<input type="hidden" name="description" id="hide">
		<input type="hidden" name="producttype" id="type">
		<input type="hidden" name="brandname" value="<?php echo $brand ?>">
		<input type="submit" value="Upload" onclick="reverse()">
	</form>
</div>
	<div class="area" >
            <ul class="frank">
            		<li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >
	
</body>
<style type="text/css">
	body{
		margin: 0;
		overflow: hidden;
		font-family: sans-serif;
		background: whitesmoke;
	}
    #img{
        display: block;
    }
	#button{
		padding: 15px;
		background-color: #212;
		color: #fff;
		width: 11%;
		margin-top: 0;
	}
	form{
		display: flex;
		flex-direction: column;
		margin: 5% 20%;
		width: 60%;
		border-radius: 25px;
		box-shadow: 1px 1px 19px -5px grey;
		background-color: #fff;
		padding: 15px 35px 15px 15px;
	}
	input{
		width: 100%;
		height: 35px;
		font-size: 16px;
		padding: 4px;
		border-radius: 11px;
		margin-bottom: 15px;
	}
	input[type = submit]{
		width: 125px;
		background: #047aed;
		border: none;
		height: 45px;
		border-radius: 15px;
		color: #fff;
		margin-left: 50%;
		transform: translate(-50%, -50%);
		margin-top: 25px;
	}
	textarea{
		width: 100%;
		font-size: 15px;
		margin-bottom: 15px;
	}
	h1{
		text-align: center;
		margin-bottom: 5px;
		color: #047aed;
		font-size: 45px;
		font-family: Millik;
	}
.content {
    width: 100%;
    position: absolute;
    top:10vh;
    z-index: 3;
}

.content h1{
    text-align: center;
    margin-top: 0;
    font-size: 50px;
}


.area{
    background: #4e54c8;  
    width: 100%;
    height:100vh;  
}

.frank{
    position: absolute;
    top: -11vh;
    left: 0;
    width: 100%;
    height: 120%;
    overflow-y: hidden;
}
.frank li{
    position: absolute;
    display: block;
    list-style: none;
    z-index: 1;
    width: 20px;
    height: 20px;
    background:   #ee7752;
    animation: animate 15s linear infinite;
    animation-delay: -2s;
    bottom: -150px;
    border-radius: 50%;
}

.frank li:nth-child(1){
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}


.frank li:nth-child(2){
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}

.frank li:nth-child(3){
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}

.frank li:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.frank li:nth-child(5){
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.frank li:nth-child(6){
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.frank li:nth-child(7){
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.frank li:nth-child(8){
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.frank li:nth-child(9){
    left: 20%;
    width: 150px;
    height: 150px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.frank li:nth-child(10){
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}
.frank li:nth-child(11){
    left: 15%;
    width: 120px;
    height: 120px;
    animation-delay: 1.5s;
    animation-duration: 21s;
}
.frank li:nth-child(12){
    left: 55%;
    width: 90px;
    height: 90px;
    animation-delay: 2.5s;
    animation-duration: 18s;
}
select{
	width: 100%;
	height: 35px;
	margin-bottom: 15px;
	font-size: 15px;
}
@keyframes animate {

    0%{
        opacity: 1;
        border-radius: 50%;
        background:   #ee7752;
        top: 0;
    }
    85%{
    	opacity: .85;
    	background:  #ee7752;
    }
    100%{
        opacity: 0;
        border-radius: 50%;
        top: 1000px;
    }

}
</style>
<script type="text/javascript">
	function reverse() {
		var area = document.getElementById('area').value;
		document.getElementById('hide').value = area;
		var seperate = document.getElementById('seperate').value;
		document.getElementById('type').value = seperate;
		var select = document.getElementById('select').value;
		document.getElementById('receive').value = select;
	}
	function salt(id) {
	    document.getElementById('none').style.display = "block";
	}
    function show() {
         document.getElementById('img').style.display = "block";
         var selector = document.getElementById('files').value;
         document.getElementById('img').src = "../online/images/"+selector;
    }
</script>
</html>