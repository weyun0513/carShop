<html>
<body>
<?
	echo "<H2>�|���M�� <br></H2>";
	echo "<h4><p align='center' style='line-height: 0%'>�w������</p></h4>";
	echo "<h5><p align='right' style='line-height: 0%'><a href='.\login.php'> �^�|���M��</a></p></h5>";

	$link=mysql_connect('localhost','root','123456');
	mysql_select_db('wouc');

			if($sex=='�k')
				$str="update customer set  cus_id='".$id."',cus_name='".$name."',cus_sex=1 ,cus_phone='".$phone."',cus_address='".$address."',cus_pwd='".$pwd."' where cus_id='".$sel."';";
			if($sex=='�k')
				$str="update customer set  cus_id='".$id."',cus_name='".$name."',cus_sex=2 ,cus_phone='".$phone."',cus_address='".$address."',cus_pwd='".$pwd."' where cus_id='".$sel."';";

			$result=mysql_query($str,$link);
			echo "<p align='center' style='line-height: 0%'> �|����T�ק令�\!!</p>";

	echo "<hr color='pink'>";
			    echo "<p align='center'><b><font color='#00003f' face='�з���' size='5'>���ʫ᪺��Ʀp�U</font></b></p>";
					echo	"<table border=1 align='center' bordercolor='pink'>";
					echo "<p align='center'>";
							echo "<tr><td>������</td><td>".$id."</td></tr>";
							echo "<tr><td>�m�W</td><td>".$name."</td></tr>";
							if	($sex=='�k')		echo "<tr><td>�ʧO</td><td>�k</td></tr>";
							if	($sex=='�k')		echo "<tr><td>�ʧO</td><td>�k</td></tr>";
							echo "<tr><td>�q��</td><td>".$phone."</td></tr>";
							echo "<tr><td>�a�}</td><td>".$address."</td></tr>";
							echo "<tr><td>�K�X</td><td>".$pwd."</td></tr>";
					echo	"</table>";

	mysql_close($link);

?>
</body>
</html>