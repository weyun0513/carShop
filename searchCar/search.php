<?php
	include("../common/banner.php"); 
	

	?>
<html>
<head>
<title>新車搜尋</title>
<base target="main">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" href="../css/style.css">
</head>

<body>
<div id="wrapper" style="margin-top:100px;">

<font color=red size=6>新車搜尋:</font>

<p>
<form action="submit.php" method="post" target=courseshow>
	<input type = radio name='group' value =1 checked> 依條件搜尋
	<select name='name'><option>選擇車廠/車款
			<option>===============<option>TOYOTA<option>---------------
			<option>CAMRY	<option>ALTIS	<option>VIOS	<option>WISH
      
      <option>===============<option>BMW<option>---------------
			<option>BMW 1	<option>BMW 2	<option>BMW 3  <option>BMW 4 <option>BMW 5 <option>BMW 6 <option>BMW 7

			<option>===============<option>BENS<option>---------------
			<option>A-CLASS	<option>E-CLASS	<option>C-CLASS	<option>S-CLASS

			<option>===============<option>PORSCHE<option>---------------
			<option>BOXSTER	<option>CAYMAN <option>NEW911 <option>PANAMERATurbo S <option>PANAMERA 4S
      <option>PANAMERA 4

			<option>===============<option>NISSAN<option>---------------
			<option>TIIDA	<option>SENTRA	<option>MARCH

			<option>===============<option>FORD<option>---------------
			<option>MONDEO	<option>FOCUS	<option>Fiesta	<option>ESCAPE

	</select>

	<select name='color'><option>選擇顏色
		<option>黑 <option>白 <option>灰 
    <option>黃 <option>紅 <option>藍 <option>不限定
	</select>

	<select name='power'><option>選擇排氣量
		<option>1500以下 <option>1600	<option>1800	<option>2000
		<option>2300	<option>2400以上 <option>不限定
	</select>

	<br>

	<input type = 'radio' name='group' value ='2'> 依價格搜尋
	<select name='price'><option>選擇售價
		<option>50萬以下 <option>50~70萬  <option>70~90萬 <option>90~110萬
		<option>110~130萬 <option>130~150萬 <option>150萬以上 <option>不限定
	</select>
  <p>
	<input type = 'submit' value ='開始搜尋' >
	<input type ='reset' value ='重設'>
</form>
<iframe src=welcome.html name=courseshow width=90% height=768>  //在同一個網頁建立一個800*600的框架,將welcome.htm的內容,秀在裡面.
Your browser can not read frames.
</iframe>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://tablesorter.com/__jquery.tablesorter.min.js'></script>

        <script src="../js/index.js"></script>
        </div>
</body>
</html>