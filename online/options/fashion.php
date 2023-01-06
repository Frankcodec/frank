<?php 
session_start();
include_once '../database/dbconnect.php';
$name = $_SESSION["username"];

$sql = "select * from product where producttype = 'fashion'";
$result = $conn->query($sql);
while ($rows = $result->fetch_assoc()) {?>
	<div>
		<h3><?php echo $rows['product_name'] ?></h3>
		<img src="./images/<?php echo $rows['product'] ?>">
	</div>
<?php }
?>
<style type="text/css">
	#fashion{
		border-bottom: 4px solid #fff;
	}
	#foods{
		border-bottom: none;
	}
</style>