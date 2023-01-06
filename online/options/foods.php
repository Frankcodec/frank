<?php 
session_start();
include_once '../database/dbconnect.php';
$name = $_SESSION["username"];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	$sql = "select * from product";
	$result = $conn->query($sql);
	while($rows = $result->fetch_assoc()){?>
		<a href='buy.php?productname=<?php echo $rows["product_name"]?>&product=<?php echo $rows["product"]?>&product_price=<?php echo $rows["product_price"]?>&productdescrip=<?php echo $rows["productdescrip"] ?>'><div class='style'>
			<img src="./images/<?php echo $rows['product']; ?>" id="image">
		</div></a>

	<?php
	}
	?>
	<a href="subform.php" class="subform"><button>Start Selling</button></a>
	<a href="uploadproduct.php" class="subform"><button>Upload a Product</button></a>
</body>
</html>
<style type="text/css">
	#foods{
		border-bottom: 4px solid #fff;
	}

</style>