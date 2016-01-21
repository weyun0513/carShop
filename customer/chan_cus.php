<html>
<body>
<?
	echo "<H2>會員專區 <br></H2>";
	echo "<h4><p align='center' style='line-height: 0%'>預約維修</p></h4>";
	echo "<h5><p align='right' style='line-height: 0%'><a href='.\login.php'> 回會員專區</a></p></h5>";

	$link=mysql_connect('localhost','root','123456');
	mysql_select_db('wouc');


		echo "<p align='center'><b><font color='#800000' size='5' face='標楷體'>您在本公司所登錄的資訊</font></b><br>";
		$str="select *  from customer where cus_id='".$_COOKIE["cus_id"]."';";
		//echo $str;
		$result=mysql_query($str,$link);

		while	($row = mysql_fetch_array ($result , MYSQL_NUM))	{
			echo	"<table border=1 bordercolor='pink' align='center'>";
					$act=$row;	//將選取的資料內容放在act用於表單。
					echo "<tr><td>身分證</td><td>".$row[0]."</td></tr>";
					echo "<tr><td>姓名</td><td>".$row[1]."</td></tr>";
					if	($row[2]==1)	echo "<tr><td>性別</td><td>男</td></tr>";
					else						echo "<tr><td>性別</td><td>女</td></tr>";
					echo "<tr><td>電話</td><td>".$row[3]."</td></tr>";
					echo "<tr><td>地址</td><td>".$row[4]."</td></tr>";
					echo "<tr><td>密碼</td><td>".$row[5]."</td></tr>";
			echo	"</table>";
		}



	echo "<form name='z' action='chan_cus_1.php' method='post'>";
	echo"<table width='40%' border=1 bgcolor='pink' align='center'>";
		echo "<tr><td  bgcolor='#f060c0' colspan='2'><font color='#ffffff' size='6' face='標楷體'>請更改你想要異動的資料</font></td><tr>";
		echo "<tr><td><p align='center'><input type = 'hidden' value ='".$act[0]."' name='sel'></p></td><tr>";  //用隱藏欄位傳送
		echo "<tr><td><p align='center'>身分證</td> <td><input type = 'text' name='id' value='".$act[0]."'></p></td><tr>";
		echo "<tr><td><p align='center'>姓名 </td> <td><input type = 'text' name='name'value='".$act[1]."' ></p></td><tr>";
		if($act[2]==1)
		echo "<tr><td><p align='center'>性別 </td> <td><input type = 'radio' name='sex' value ='男' checked> 男<input type = 'radio' name='sex' value ='女'> 女</p></td><tr>";
		else
		echo "<tr><td><p align='center'>性別 </td> <td><input type = 'radio' name='sex' value ='男' > 男<input type = 'radio' name='sex' value ='女' checked> 女</p></td><tr>";
		echo "<tr><td><p align='center'>電話 </td> <td><input type = 'text' name='phone' value='".$act[3]."'>	</p></td><tr>";
		echo "<tr><td><p align='center'>地址 </td> <td><input type = 'text' name='address' value='".$act[4]."'>	</p></td><tr>";
		echo "<tr><td><p align='center'>密碼 </td> <td><input type = 'text' name='pwd' value='".$act[5]."'>	</p></td><tr>";

		echo "<tr><td colspan='2'><p align='center'><input type = 'submit' value ='確定'></p></td><tr>";
	echo "</forrm>";
	mysql_close($link);

?>
</body>
</html>