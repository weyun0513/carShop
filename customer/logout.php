<?php
	session_start();
	//將session清空
	unset($_SESSION['login']);
	// 跳回登入頁面
	
 	 $url='../index.php';
	echo '<script>window.location = "'.$url.'";</script>';
	die;
?>
