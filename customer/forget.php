<?php include("../common/banner.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="../css/sticky.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<title>wenCar </title>
		<style>
			body{
			margin-top:100px;
			}
			.navbar{
					min-height: 90px;
			}
			a.font-large {
				font-size: large;
				font-family: Microsoft JhengHei;
			}
			a.font-medium {
				font-size: medium;
				font-family: Microsoft JhengHei;
			}
			.ifont {
				font-family: Microsoft JhengHei;
			}
			.input-field label {
				color: #000;
			}
		</style>
	</head>
	<body class="amber lighten-1">
	
		<main class="valign-wrapper">
		<div class="row">
			<div class="input-field col l3 m3"></div>
				<div class="col l6 m6 s12">
					<div class="card white darken-1">
						<form class="col l12 m12 s12" action="" method="post" id="loginform">
						<h3 style="font-family: Microsoft JhengHei;">忘記密碼</h3>
						<div class="row">
							<div class="input-field col l12 m12 s12">
								<i class="material-icons prefix"></i>
								<input id="icon_account" name="account" type="text" class="validate" required>
								<label for="icon_account" class="ifont">請輸入帳號(trial admin)</label>
							</div>
							<div class="input-field col l12 m12 s12">
								<i class="material-icons prefix"> </i>
								<input id="icon_lock" name="phone" type="text" class="validate" required>
								<label for="icon_lock" class="ifont">請輸入電話(trial 0988123456)</label>
							</div>
							<div class="input-field col l12 m12 s12">
								<i class="material-icons prefix"> </i>
								<input id="icon_lock" name="birthday" type="text" class="validate" required>
								<label for="icon_lock" class="ifont">請輸入生日(YYYY-MM-dd)(trial 2016-01-03)</label>
							</div>
								<button class="btn light-green accent-4 right ifont" id="submitBtn" type="submit">送出</button>
							
							<div id="result" style="color: red;">
								<lable id="result" style="color: red;" >資訊不足，請輸入完整資訊!</lable>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>		
		</main>
		<footer>
			<div class="white-text ifont" align="right">
				<h5 style="font-weight:bold;">wenCar &nbsp&nbsp</h5>
			</div>	
		</footer>
		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="../js/materialize.min.js"></script>
		<script type="text/javascript">
			$(function(){
				$("#loginform").submit(function(e){
					e.preventDefault();
					$.ajax({
						type: "POST",
						url: "check.php",
						data: $("#loginform").serialize(),
						
						success: function(data){
							$('#result').html(data);
						}
					});
				});
			})

			$(document).ready(function() {
				$('select').material_select();
			});
			$('.button-collapse').sideNav({
				menuWidth: 240, // Default is 240
				edge: 'left', // Choose the horizontal origin
				closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
			});
		</script>
	</body>
</html>