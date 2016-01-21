<html>
<body>
<?
	echo "<H2>會員專區 <br></H2>";
	echo "<h4><p align='center' style='line-height: 0%'>預約維修</p></h4>";
	echo "<h5><p align='right' style='line-height: 0%'><a href='.\login.php'> 回會員專區</a></p></h5>";

	$link=mysql_connect('localhost','root','123456');
	mysql_select_db('wouc');

			if($sex=='男')
				$str="update customer set  cus_id='".$id."',cus_name='".$name."',cus_sex=1 ,cus_phone='".$phone."',cus_address='".$address."',cus_pwd='".$pwd."' where cus_id='".$sel."';";
			if($sex=='女')
				$str="update customer set  cus_id='".$id."',cus_name='".$name."',cus_sex=2 ,cus_phone='".$phone."',cus_address='".$address."',cus_pwd='".$pwd."' where cus_id='".$sel."';";

			$result=mysql_query($str,$link);
			echo "<p align='center' style='line-height: 0%'> 會員資訊修改成功!!</p>";

	echo "<hr color='pink'>";
			    echo "<p align='center'><b><font color='#00003f' face='標楷體' size='5'>異動後的資料如下</font></b></p>";
					echo	"<table border=1 align='center' bordercolor='pink'>";
					echo "<p align='center'>";
							echo "<tr><td>身分證</td><td>".$id."</td></tr>";
							echo "<tr><td>姓名</td><td>".$name."</td></tr>";
							if	($sex=='男')		echo "<tr><td>性別</td><td>男</td></tr>";
							if	($sex=='女')		echo "<tr><td>性別</td><td>女</td></tr>";
							echo "<tr><td>電話</td><td>".$phone."</td></tr>";
							echo "<tr><td>地址</td><td>".$address."</td></tr>";
							echo "<tr><td>密碼</td><td>".$pwd."</td></tr>";
					echo	"</table>";

	mysql_close($link);

?>
</body>
</html>