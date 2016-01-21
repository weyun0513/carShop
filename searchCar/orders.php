<?php

header("Content-Type:text/html; charset=utf-8");
require("../dbUtil/pdo.php");
include("../common/banner.php");   
if(session_status()==PHP_SESSION_NONE){
						session_start();}
	// 接收表單POST的VALUE
	$num = $_POST['quantity'];
	$allprice = $_POST['price'];
	$item = $_POST['item'];
	$account = $_SESSION['cus_account'];
	$note = $_POST['note'];
	try{
	    $stmt = $conn->prepare("INSERT INTO order_car(ord_num, ord_allprice, ord_note, item_id, cus_id) VALUES (:ord_num,:ord_allprice,:ord_note,:item_id,:cus_id)");
	    $stmt->bindParam(':ord_num', $num);
	    $stmt->bindParam(':ord_allprice', $allprice);
	    $stmt->bindParam(':ord_note', $note);
	    $stmt->bindParam(':item_id', $item);
	    $stmt->bindParam(':cus_id', $account);

	    $stmt->execute();
		
		
		echo '<script>alert("訂購成功!")</script>';
	
   		 $url='../index.php';
		echo '<script>window.location = "'.$url.'";</script>';
		die();

	}
	catch(PDOException $e) {
 	   echo "Error: " . $e->getMessage();
	}
	$conn = null;
?>