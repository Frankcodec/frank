<?php 
session_start();
$productname = $_GET["productname"];
$product = $_GET["product"];
$product_price = $_GET["product_price"];
$productdescrip = $_GET["productdescrip"];
$productqty = $_GET["productqty"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Buy</title>
</head>
<body>
	<div>
		<img src="./images/<?php echo $product ?>">
		<h2><?php echo $productname ?></h2>
		<h3>#<?php echo $product_price ?></h3>
		<h3><?php echo $productdescrip ?></h3>
		
		<input type="hidden" name="" id="soap" value="<?php echo $productqty ?>">
		<div style="display: flex;flex-direction: row;"><li style="height: 30px;background: pink;padding: 12px 12px 5px 12px;list-style-type: none;font-size: 18px;margin-right: 10px;border-radius: 10px;" id="next"><</li>
		<h3 id="number">1</h3><li style="background: pink;height: 30px;padding: 12px 12px 5px 12px;list-style-type: none;font-size: 18px;margin-left: 10px;border-radius: 10px;" id="prev">></li>
	</div>
	<h3>Only <?php echo $productqty ?> of this product is currently available</h3>
	<button>Order Now</button>
	<button>Add to Cart</button>
	</div>
</body>
</html>
<script type="text/javascript">
	var prev = document.getElementById('prev');
	var next = document.getElementById('next');
		var soap = document.getElementById('soap');
		var number = document.getElementById('number');
		var i = 1;
		prev.addEventListener('click', done)
		next.addEventListener('click', undone)
	function done() {
		if (i < soap.value) {
			i += 1
			number.innerHTML = i;
		}
	}
	function undone() {
		if (i <= soap.value && i > 1) {
			i -= 1
			number.innerHTML = i;
		}
	}
</script>
<style type="text/css">
	*{
		font-family: sans-serif;
	}
	#prev, #next{
		user-select: none;
	}
</style>