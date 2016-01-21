<?php
	require("../dbUtil/pdo.php");
	include("../common/banner.php"); 
	if (!isset($_SESSION['cus_account'])) {
		$_SESSION['cus_account'] = "";
		$_SESSION['login'] = "false";
	}

 	$account = $_SESSION['cus_account'];

	try {
	    $stmt = $conn->prepare("SELECT c.ord_id,c.ord_date,c.ord_num,c.ord_allprice, b.item_name,c.ord_note FROM order_car c left join item  b on c.item_id = b.item_id WHERE c.cus_id = :cus_id");
	    $stmt->bindParam(':cus_id', $account);
	    $stmt->execute();
	}
	catch(PDOException $e) {
 	   echo "Error: " . $e->getMessage();
	}
	$conn = null;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="../css/sticky.css">
		<title>wenCar</title>
	<style>
	nav{
	height: 104px;
}
	</style>
	</head>
	<body class="amber accent-1">
		<div  class="container" style="margin-top:20%">
		 
				 
		<div class="row">
			<div class="col-md-2">
						<h5><b>訂單編號</b></h5>
		</div>
		<div class="col-md-2">
						<h5><b>下單日期</b></h5>
			</div>
		<div class="col-md-2">
						<h5><b>訂購數量</b></h5>
			</div>
		<div class="col-md-2">
						<h5><b>訂單價錢</b></h5>
			</div>
		<div class="col-md-2">
						<h5><b>汽車品名</b></h5>
			</div>
		<div class="col-md-2">
						<h5><b>訂單備註</b></h5>
			</div></div>
				 
			 	
			<?php
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			?>
			<div class="row">
			<div class="col-md-2" ><?php echo $row['ord_id'];?></div>
			 <div class="col-md-2"><?php echo $row['ord_date'];?></div>
			<div class="col-md-2"><?php echo $row['ord_num'];?></div>
			<div class="col-md-2">$ <?php echo $row['ord_allprice'];?></div>
			<div class="col-md-2"><?php echo $row['item_name'];?></div>
			<div class="col-md-2"><?php echo $row['ord_note'];?></div>
			</div>
			<?php
				}
			?>
			</div>
		</main>
		<script type="text/javascript">
			$(document).ready(function() {
				$('select').material_select();
			});
		 
		</script>
		 <?php if($_SESSION['login'] == "false"){
		  	  $url='../index.php';
		 echo '<script>
		 alert("time out! you are log off");
		 window.location = "'.$url.'";
		 
		 </script>';
		 
		 } ?>
		<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="../js/jquery.redirect.js"></script>
		<script type="text/javascript" src="../js/materialize.min.js"></script>
	</body>
</html>