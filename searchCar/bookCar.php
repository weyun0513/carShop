<?php session_start(); 
	
 
	if (!isset($_SESSION['login']) ) 
	{$_SESSION['login']== "";
		$url='../customer/login.php';
		echo '<script>window.location = "'.$url.'";</script>';
		die;
	}
	
header("Content-Type:text/html; charset=utf-8");
require("../dbUtil/pdo.php");
include("../common/banner.php");   
?>	
		
<html>
<head>
<title>車輛資料</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor=#c0c0c0>
<?php

$itemid=$_POST['id']; //車輛id

//將資料庫裡選定的會員資料顯示在畫面上

	$stmt = $conn->prepare("SELECT * FROM item where item_id= :item_id");
	    $stmt->bindParam(':item_id', $itemid);
 		$stmt->execute();
?>
<html>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<title>wenCar</title>
</head>
<body class="amber lighten-1" ng-app style="margin-top: 100px;">
<?php

 $row = $stmt->fetch(PDO::FETCH_ASSOC) 

?>
<center><img src="<?php echo $row['item_pic']?>" width="1049" height="590"></center>
			<div class='container'>
				
						<input type="hidden" name="id"  value="<?php echo  $row['item_id']; ?>" />
				
				<div class="row">
					<div class="col-xd-6 col-xd-offset-6" style="margin-left:25%">
						<h3>汽車價格：</span>$ <?php echo  $row['item_price']?></h3>
				 	</div>
				</div>
				<div class="row">
						<div class='col-xd-6 col-xd-offset-6' style="margin-left:25%">
							<h3>汽車名稱：</span><?php echo $row['item_name']?></h3>
						</div>
				</div>
				<div class='row'>
					<div class='col-xd-6 col-xd-offset-6' style="margin-left:25%">
						<h3>汽車顏色：</span><?php echo $row['item_color']?></h3>
					</div>
				</div>
				<div class='row'>
					<div class='col-xd-6 col-xd-offset-6' style="margin-left:25%">
						<h3>汽車排氣量：</span><?php echo $row['item_power']?></h3>
					</div>
				</div>
				<div class='row'>
					<div class='col-xd-6 col-xd-offset-6' style="margin-left:25%">
						<h3>汽車類型：</span><?php echo $row['item_type']?></h3>
					</div>
				</div>
				<div class='row'>
					<div class='col-xd-6 col-xd-offset-6'style="margin-left:25%">
						<h3>汽車特色：</span><?php echo $row['item_descr']?></h3>
					</div>
				</div>
					
		</div>
	
		
<div class="row">
	<form class="col l12 m12 s12" action="" method="post" id="bookform" style="margin-left:100px;">
				<input id="item" name="item" type="hidden" class="validate" value="<?php echo $row['item_id'];?>">
				<input id="quantity" name="quantity" type="hidden" class="validate" value=1>
				<input id="price" name="price" type="hidden" class="validate" value="<?php echo $row['item_price'];?>">
			<div class='row'>
					<div class='col-xd-6 col-xd-offset-6'style="margin-left:25%">
	<textarea rows="4" cols="50" name="note" id="note" placeholder="請輸入訊息"> </textarea>
			<button class="btn btn-info light-green accent-4 ifont" type="submit">送出</button>
	</div></div>
		<div id="result"></div>
	</form>
</div>


<?php


echo "<br>";
echo "<a href=search.php target=_target>回搜尋";

?>
</body>
<script type="text/javascript">
$(function(){
				$("#bookform").submit(function(e){
					e.preventDefault();
					$.ajax({
						type: "POST",
						url: "orders.php",
						data: $("#bookform").serialize(),
					
						success: function(data){
							$('#result').html(data);
						}
					});
				});
			})
</script>
</html>
