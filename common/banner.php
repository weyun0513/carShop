<?php
	
	$lifetime = 180; //單位秒，3600秒=1小時
	session_set_cookie_params($lifetime);
	if(session_status()==PHP_SESSION_NONE){
		session_start();
	}
	?>
<html>
	<head>
		<body>

	 
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
<link rel="stylesheet" type="text/css" href="../css/structure.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/patros.css" >
<link rel="shortcut icon" href="../favicon.ico">
<script src="../js/jquery-2.1.4.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="../images/logo_wen.png" alt="company logo" /></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right custom-menu">
						<li class="active"><a href="../index.php">首頁<br>Home</a></li>
					<?php if(!isset($_SESSION['login']) or $_SESSION['login']!='true'){ ?>
						<li><a href="../customer/login.php"  target="_parent">會員登入<br>LogIn</a></li>
					<?php } else{ ?>
						<li><a href="../customer/list.php"  target="_parent">訂單查詢<br>Order Check</a></li>
						<li><a href="../customer/logout.php"  target="_parent">登出<br>LogOut</a></a></li> 
							<?php }?>
						<li><a href="../searchCar/search.php"  target="_parent">車款搜尋<br>Car Search</a></li>
						<li><a href="../message/guestbook.php"  target="_parent">留言板<br>GuestBook</a></li>
					
						
					</ul>
				</div>
			</div>
		</nav>
</body>
</html>		