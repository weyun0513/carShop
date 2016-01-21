<?php
// 禁止非 POST 方式轉入
if(!isset($_POST['submit'])){
    exit('非法進入');
}
// 處理form
if(get_magic_quotes_gpc()){
	$username = htmlspecialchars(trim($_POST['username']));
	$email = htmlspecialchars(trim($_POST['email']));
	$content = htmlspecialchars(trim($_POST['content']));
} else {
	$username = addslashes(htmlspecialchars(trim($_POST['username'])));
	$email = addslashes(htmlspecialchars(trim($_POST['email'])));
	$content = addslashes(htmlspecialchars(trim($_POST['content'])));
}
if(strlen($username)>16){
	exit('錯誤 : 名稱不得超過16個字 [ <a href="javascript:history.back()">返 回</a> ]');
}
if(strlen($username)>60){
	exit('錯誤 : e-mail 不得超過60個字 [ <a href="javascript:history.back()">返 回</a> ]');
}


require("../dbUtil/server.php");
require("./function.php");

$createtime = time();
$ip = get_client_ip();
// insert message
$insert_sql = "INSERT INTO guestbook(username,email,content,createtime,clientip)VALUES";
$insert_sql .= "('$username','$email','$content',$createtime,'$ip')";

if(mysql_query($insert_sql)){
?>
<!DOCTYPE html  >
<html  >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta http-equiv="Refresh" content="2;url=guestbook.php">
<link rel="stylesheet" type="text/css" href="style/style.css" />
<title>留言成功</title>
</head>
<body>
<div class="refresh">
<p>留言成功！感謝您的留言。<br />請稍後,頁面準備返回</p>
</div>
</body>
</html>
<?php
} else {
	echo '留言失敗：',mysql_error(),'[ <a href="javascript:history.back()">返 回</a> ]';
}
?>