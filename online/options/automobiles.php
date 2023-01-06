<?php 
session_start();
include_once '../database/dbconnect.php';
$sql = "select * from product";
	$result = $conn->query($sql);
	while($rows = $result->fetch_assoc()){?>
		<div class='style'>
			<img src="./images/<?php echo $rows['product']; ?>" id="image">
			
		</div>

<?php
	}
?>
<style type="text/css">
	#automobiles{
		border-bottom: 4px solid #fff;
	}
	#foods{
		border-bottom: none;
	}
</style>