<?php
	include("../common/banner.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style/style.css" />

<title>留言板</title>

</head>
<body style="padding-top: 150px;">
<div id="container">
<div id="guestbook"><!--留言列表-->
<h3>留言列表</h3>
<?php

require("../dbUtil/server.php");
require("./config.php");

// 頁數 $p 参數 
$p = isset($_GET['p'])?$_GET['p']:1;
// 資料庫指標
$offset = ($p-1)*$pagesize;

$query_sql = "SELECT * FROM guestbook ORDER BY id DESC LIMIT  $offset , $pagesize";
$result = mysql_query($query_sql);

if(!$result) exit('查詢資料錯誤：'.mysql_error());
// 
while($gb_array = mysql_fetch_array($result)){
?>
<div class="guestbook-list">
<p class="guestbook-head">

<span class="bold"><?=$gb_array['username']?></span> <span class="guestbook-time">[<?=date("Y-m-d H:i", $gb_array['createtime'])?>]</span></p>
<p class="guestbook-content"><?=nl2br($gb_array['content'])?></p>
<?php
	// 回覆(
	if(!empty($gb_array['replytime'])) {
?>
<p class="guestbook-head">回覆(Reply)： <span class="guestbook-time">[<?=date("Y-m-d H:i", $gb_array['replytime'])?>]</span></p>
<p class="guestbook-content"><?=nl2br($gb_array['reply'])?></p>
<?php
	}	 
?>
</div>
<?php
} 
?>
<div class="guestbook-list guestbook-page" >
<p>
<?php
//
$count_result = mysql_query("SELECT count(*) FROM guestbook");
$count_array = mysql_fetch_array($count_result);
$pagenum = ceil($count_array['count(*)']/$pagesize);
echo '共 ',$count_array['count(*)'],' 條留言';
if ($pagenum > 1) {
	for($i=1;$i<=$pagenum;$i++) {
		if($i==$p) {
			echo '&nbsp;[',$i,']';
		} else {
			echo '&nbsp;<a href="index.php?p=',$i,'">'.$i.'</a>';
		}
	}
}
?>
</p>
</div>
</div>
	<!--留言串表结束-->

<div id="guestbook-form">
<h3>留言</h3>
<form id="form1" name="form1" method="post" action="submiting.php" onSubmit="return InputCheck(this)">
<p>
<label for="title">名&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;稱:</label>
<input id="username" name="username" type="text" /><span>(必填寫,長度不超過16個字)</span>
</p>
<p>
<label for="title">E-mail</label>
<input id="email" name="email" type="text" /><span>(非必填，不超過60個字)</span>
</p>
<p>
<p>
<label for="title">留言内容:</label>
<textarea id="content" name="content"></textarea>
</p>
<input type="submit" name="submit" class="btn btn-info" value="  留 言  " />
<span>(請遵守網路法規，嚴格禁止發布色情、暴力言論) </span>
</form>
</div>
</div><!--container-->
	<script language="JavaScript">
function InputCheck(form1)
{
  if (form1.nickname.value == "")
  {
    alert("請輸入名稱");
    form1.nickname.focus();
    return (false);
  }
  if (form1.content.value == "")
  {
    alert("留言内容不可空白。");
    form1.content.focus();
    return (false);
  }
}
</script>
</body>
</html>