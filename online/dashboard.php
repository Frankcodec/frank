<?php 
session_start();
include_once './database/dbconnect.php';
$name = $_SESSION["username"];
$email = $_SESSION["useremail"];
$phone = $_SESSION["phone"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
<body>
<section class="body">
<div style="height: 100%;">
<div class="gridone" style="padding: 8px;">
	<div>
	<?php 
	$sql5 = "select * from seller where name = '$name' && email = '$email' && phone = '$phone'";
	$result5 = $conn->query($sql5);
	if($result5->num_rows>0){
		
		while ($row = $result5->fetch_assoc()) {
			echo '<img src="images/'.$row["brandlogo"].'" class="picture">';?>
			<h3><?php echo $row['brandname']; ?></h3>
			<h3 style="text-align: center;">View your Company profile</h3>
		<?php
	  }
	}
		else{?>
			<a href=""><h3 style="text-align: center;">Open your own online store</h3>
			<a href="subform.php" class="subform"><button>Get Started</button></a>
			</a>
		<?php
	}
		?>
	</div>
</div>
<div class="gridoneb" style="margin-top: 45%;">
	<img src="images/light.jpg" class="picture">
</div>
</div>
<div style="overflow-x: hidden;position: relative;height: 100%;" class="gridtwo">
	<?php include_once 'nav.php'; ?>
<div id="stream">
	<h1>welcome <?php echo $_SESSION["username"] ?></h1>
	<h2 style="color: #047aed;">Suggested for you</h2>
	<section id="sectioned" style="padding: 8px;">
		<div style="position: absolute; z-index: 4;margin-top: 5%;width: 100%;">
<button id="move"> < </button>
<button id="unmove" disabled=""> > </button>
</div>
		<div id="section">
		
	<?php 
	$sql = "select * from product";
	$result = $conn->query($sql);
	while($rows = $result->fetch_assoc()){?>
			<a href='buy.php?productname=<?php echo $rows["product_name"]?>&product=<?php echo $rows["product"]?>&product_price=<?php echo $rows["product_price"]?>&productdescrip=<?php echo $rows["productdescrip"] ?>&productqty=<?php echo $rows["productqty"] ?>'><div id='style' style="display: relative; z-index: 1;">
			<img src="./images/<?php echo $rows['product']; ?>" id="image">
			<h3 style="margin: 0"><?php echo $rows['product_name'] ?></h3>
			<h3 style="margin: 0">#<?php echo $rows["product_price"] ?></h3>
		</div></a>
	<?php
	}
	?>
</div>
</section>
	<h2 style="margin-top: 5%;color: #047aed;">Top Deals!</h2>
	<div id="sections">
		<?php 
	$discount = '555';
	$sql2 = "select * from product where product_price >= '$discount' order by product_price desc";
	$result2 = $conn->query($sql2);
	while($cols = $result2->fetch_assoc()){?>
		<div id="style" style="height: 255px;">
		<img src="./images/<?php echo $cols['product']; ?>" id="image">
		<h3 style="margin: 0"><?php echo $cols['product_name'] ?></h3>
		<h3 style="margin: 0"><?php echo $cols["product_price"] ?></h3>
	</div>
	<?php 
}
	?>
	</div>
	
	<a href="uploadproduct.php" class="subform"><button>Upload a Product</button></a>
</div>
</div>
<div style="height: 100%;">
<div class="gridthree" style="padding: 0px;">
	<div style="background: cyan;height: 145px;"><img src="cart.svg" class="picture" style="object-position: center;margin-left: 25px;"></div><h3 style="text-align: center;">Your Cart</h3>
   <a href="">
   <div style="background-color: #000;padding: 2px;border-radius: 15px;margin: 2px 5px;border: 1px solid #fff;color: #fff;text-align: center;"><h3>View your cart</h3></div>
   <div style="display: flex;flex-direction: column;align-items: center;justify-content: center;"><button style="padding: 7px;margin-top: 15%;">Open Cart</button></div>
   </a>
</div>
</div>
</section>
</body>
<script type="text/javascript">
	let months = [-5, -15, -25, -35, -45, -50]
	let month = [-45, -35, -25, -15, -5, 0]
	pos = months;
	pas = month;
	document.getElementById('unmove').disabled = false;
	var Unmove = document.getElementById('move');
	Unmove.addEventListener("click", move);
	var j = 0;
	var Move = document.getElementById('unmove')
	Move.addEventListener('click', overmove);
	var i = 0;
	function overmove() {
		if (pas = -45) {
			document.getElementById('unmove').disabled = false;
		}
		else if (pos != -50) {
			document.getElementById('unmove').disabled = false;
		}
	if (i < 6) {
    i += 1
    pos = months[i];  
    var translate = "translate(";
	document.getElementById('section').style.transform = translate + pos+'%)';
	document.getElementById('unmove').disabled = false;
    } 
    else{
    	i = 0;
    	i += 1
   		pos = months[i];  
    	var translate = "translate(";
		document.getElementById('section').style.transform = translate + pos+'%)';	
    }
}
   function move() {
	if (j < 6) {
    j += 1
    pas = month[j];  
    var translate = "translate(";
	document.getElementById('section').style.transform = translate + pas+'%)';
    } 
    else{
    	j = -1
    	j -= 1
    	pas = month[j];
    	var translate = "translate(";
    	document.getElementById('section').style.transform = translate + pas+'%)';
    }
}
</script>
</html>