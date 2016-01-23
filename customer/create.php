<?php include("../common/banner.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="../css/sticky.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="../js/materialize.min.js"></script>
		<title>wenCar</title>
		<style>
			.navbar{
					min-height: 90px;
			}
			.ifont {
				font-size: large;
				font-family: Microsoft JhengHei;
			}
			/*讓div中的div置中*/
			#inner {
				width: 95%; /*調整大小*/
				margin: 10px auto; /*調整邊緣大小*/
			}
			/*讓div中的顯示置中*/
			#reduce {
				width: 95%;
				margin: 0 auto;
			}
			.input-field label {
				color: #000;
			}
			body{
				background-image: url(../images/usedcar2.jpg);
				background-repeat: no-repeat;
				background-size: cover;
			margin-top:50px;
			}
		</style>
	</head>
	<body class="amber lighten-1">
		<header>
			<div class="row">
			
			</div>
		</header>
		<main class="valign-wrapper">
		<div class="row container">
			<div class="input-field col l2 m1"></div>
			<div class="col l8 m10 s12">
				<div id="inner" class="card white">
					<div id="reduce">
						<form action="" method="post" id="myform" >
							<div class="row">
								<h2 style="font-family: Microsoft JhengHei;"><center>註冊</center></h2>
								<div class="input-field col l12 m12 s12">
									<i class="material-icons prefix">account_circle</i>
									<input id="icon_account" name="account" type="text" class="validate" maxlength="10" required aria-required="true" pattern="[a-zA-Z]+" title="只能輸入英文">
									<label for="icon_account" class="ifont">登入帳號</label>
								</div>
								<div class="input-field col l12 m12 s12">
									<i class="material-icons prefix">lock</i>
									<input id="icon_lock" name="pwd" type="password" class="validate" maxlength="10" required aria-required="true" pattern="[a-zA-Z0-9]+.{5}" title="不得包含特殊符號，且長度大於等於6">
									<label for="icon_lock" class="ifont">帳戶密碼</label>
								</div>
								<div class="input-field col l12 m12 s12">
									<i class="material-icons prefix">lock</i>
									<input id="icon_lock" name="name" type="text" class="validate" maxlength="10" required aria-required="true"  title="不得包含特殊符號，且長度大於等於6">
									<label for="icon_lock" class="ifont">姓名</label>
								</div>
								<div class="ifont col l12 m12 s12">
									性別：
									<input class="with-gap" name="sex" type="radio" id="male" value="男" checked />
									<label for="male">男</label>
									<input class="with-gap" name="sex" type="radio" id="female" value="女" />
									<label for="female">女</label>
								</div>
								<div class="input-field col l12 m12 s12">
									<i class="material-icons prefix">date_range</i>
									<input id="icon_date" name="birthday" type="text" class="datepicker">
									<label for="icon_date" class="ifont">生日</label>
								</div>
								<div class="input-field col l12 m12 s12">
									<i class="material-icons prefix">settings_cell</i>
									<input id="icon_cell" name="phone" type="text" class="validate" maxlength="10" required aria-required="true" pattern="[0-9]+.{9}" title="只能輸入數字，且長度等於10">
									<label for="icon_cell" class="ifont">手機號碼</label>
								</div>
								<div class="input-field col l12 m12 s12">
									<i class="material-icons prefix">home</i>
									<input id="icon_home" name="addr" type="text" class="validate" maxlength="30" required>
									<label for="icon_home" class="ifont">聯絡地址</label>
								</div>
								<div class="input-field col l12 m12 s12" style="text-align: center;">
									<button class="btn blue ifont" type="submit">確認</button>
									<a class="btn red ifont" href="../index.php">取消</a>
								</div>
							</div>
							<div id="result"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="input-field col l2 m1"></div>
		</div>
		</main>
		<script type="text/javascript">
			$(function(){
				$("#myform").submit(function(e){
					e.preventDefault();
					$.ajax({
						url: "register.php",
						type: "POST",
						data: $("#myform").serialize(),
					
						success: function(data){
							$('#result').html(data);
						}
					});
				});
			})
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('select').material_select();
			});
			$('.button-collapse').sideNav({
				menuWidth: 240, // Default is 240
				edge: 'left', // Choose the horizontal origin
				closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
			});
			$('.datepicker').pickadate({
				format: 'yyyy-mm-dd',
				selectMonths: true, // Creates a dropdown to control month
				selectYears: 100 // Creates a dropdown of 15 years to control year
			});
		</script>
	</body>
</html>