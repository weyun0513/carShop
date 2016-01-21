<?php
require("connect.php");
@mysql_connect($host,$user,$passwd) or die("無法連結主機");
@mysql_select_db($db) or die("無法連結資料庫");


include("unicode.php");
?>