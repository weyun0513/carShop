<html>
<body>
<?
	echo "<H2>�|���M�� <br></H2>";
	echo "<h4><p align='center' style='line-height: 0%'>�w������</p></h4>";
	echo "<h5><p align='right' style='line-height: 0%'><a href='.\login.php'> �^�|���M��</a></p></h5>";

	$link=mysql_connect('localhost','root','123456');
	mysql_select_db('wouc');


		echo "<p align='center'><b><font color='#800000' size='5' face='�з���'>�z�b�����q�ҵn������T</font></b><br>";
		$str="select *  from customer where cus_id='".$_COOKIE["cus_id"]."';";
		//echo $str;
		$result=mysql_query($str,$link);

		while	($row = mysql_fetch_array ($result , MYSQL_NUM))	{
			echo	"<table border=1 bordercolor='pink' align='center'>";
					$act=$row;	//�N�������Ƥ��e��bact�Ω���C
					echo "<tr><td>������</td><td>".$row[0]."</td></tr>";
					echo "<tr><td>�m�W</td><td>".$row[1]."</td></tr>";
					if	($row[2]==1)	echo "<tr><td>�ʧO</td><td>�k</td></tr>";
					else						echo "<tr><td>�ʧO</td><td>�k</td></tr>";
					echo "<tr><td>�q��</td><td>".$row[3]."</td></tr>";
					echo "<tr><td>�a�}</td><td>".$row[4]."</td></tr>";
					echo "<tr><td>�K�X</td><td>".$row[5]."</td></tr>";
			echo	"</table>";
		}



	echo "<form name='z' action='chan_cus_1.php' method='post'>";
	echo"<table width='40%' border=1 bgcolor='pink' align='center'>";
		echo "<tr><td  bgcolor='#f060c0' colspan='2'><font color='#ffffff' size='6' face='�з���'>�Ч��A�Q�n���ʪ����</font></td><tr>";
		echo "<tr><td><p align='center'><input type = 'hidden' value ='".$act[0]."' name='sel'></p></td><tr>";  //���������ǰe
		echo "<tr><td><p align='center'>������</td> <td><input type = 'text' name='id' value='".$act[0]."'></p></td><tr>";
		echo "<tr><td><p align='center'>�m�W </td> <td><input type = 'text' name='name'value='".$act[1]."' ></p></td><tr>";
		if($act[2]==1)
		echo "<tr><td><p align='center'>�ʧO </td> <td><input type = 'radio' name='sex' value ='�k' checked> �k<input type = 'radio' name='sex' value ='�k'> �k</p></td><tr>";
		else
		echo "<tr><td><p align='center'>�ʧO </td> <td><input type = 'radio' name='sex' value ='�k' > �k<input type = 'radio' name='sex' value ='�k' checked> �k</p></td><tr>";
		echo "<tr><td><p align='center'>�q�� </td> <td><input type = 'text' name='phone' value='".$act[3]."'>	</p></td><tr>";
		echo "<tr><td><p align='center'>�a�} </td> <td><input type = 'text' name='address' value='".$act[4]."'>	</p></td><tr>";
		echo "<tr><td><p align='center'>�K�X </td> <td><input type = 'text' name='pwd' value='".$act[5]."'>	</p></td><tr>";

		echo "<tr><td colspan='2'><p align='center'><input type = 'submit' value ='�T�w'></p></td><tr>";
	echo "</forrm>";
	mysql_close($link);

?>
</body>
</html>