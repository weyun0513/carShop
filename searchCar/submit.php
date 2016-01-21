<html>
<head>
<title>新車搜尋結果</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<h2><p align='right'><a href='OK.html' target=_top> 回新車首頁</a></p></h2>
<?php
		
	header("Content-Type:text/html; charset=utf-8");
	
	require("../dbUtil/server.php");
	
$group=$_POST['group'];
$name=$_POST['name'];
$color=$_POST['color'];
$power=$_POST['power'];
$price=$_POST['price'];




	//-------------空集合預設
	if($name=='選擇車廠/車款' || $name=='===============' || $name=='---------------' )	$name='%';
  if($name=='TOYOTA') $sup='0000000001';        //sup_id
  if($name=='BMW') $sup='0000000002';           //sup_id
  if($name=='BENS') $sup='0000000003';          //sup_id
  if($name=='PORSCHE') $sup='0000000004';       //sup_id
  if($name=='NISSAN') $sup='0000000005';        //sup_id
  if($name=='FORD') $sup='0000000006';          //sup_id
  
  if($color=='不限定') 
     {$color2='不限定';}
  else
     {$color2='$color';}
     
  if($power=='不限定') 
     {$power2='不限定';}
  else
     {$power2='$power';}
         
	if($color=='選擇顏色' || $color=='不限定')	$color='%';     //item_color
	if($power=='選擇排氣量' || $power=='不限定') $power='%';   //itme_power
  if($price=='選擇售價') $price='%';     //item_price


	if($group=='1')
  {
  if(($name!='%') || ($color!='%') || ($power!='%'))
  {
			if($name!='TOYOTA' && $name!='BMW' && $name!='BENS' && $name!='PORSCHE' && $name!='NISSAN' && $name!='FORD')
      {
          $str="select * from item where item_name like '".$name."' and item_color like '".$color."' and item_power like '".$power."';";
			}
			else	  //$name=='TOYOTA' or $name!='BMW' or $name!='BENS' or $name!='PORSCHE' or $name!='NISSAN' or $name!='FORD' 
      {
          $str="select * from item where sup_id like '".$sup."' and item_color like '".$color."' and item_power like'".$power."';";
			}
	}
  else
  {
   if($color2=='不限定' || $power2=='不限定')
   {
    $str="select * from item where item_name like '%' and item_color like '%' and item_power like '%'";
   }
   else
   {
    $str="select * from item where item_name like '請選擇' and item_color like '%' and item_power like '%'";
    echo "條件錯誤,請選擇 => 選擇車廠/車款 或 選擇顏色 或 選擇排氣量.<br><br>";
   }
   }  //if($price!='%')
   
  }
	if($group=='2')
  {
  if($price!='%')
  {
		if($price=='50萬以下')
			$str="select * from item where item_price < 500000;";
		else if($price=='50~70萬')
			$str="select * from item where item_price >= 500000 and item_price < 700000;";
		else if($price=='70~90萬')
			$str="select * from item where item_price >= 700000 and item_price < 900000;";
		else if($price=='90~110萬')
			$str="select * from item where item_price >= 900000 and item_price < 1000000;";
		else if($price=='110~130萬')
			$str="select * from item where item_price >= 1100000 and item_price < 1300000;";
		else if($price=='130~150萬')
			$str="select * from item where item_price >= 1300000 and item_price < 1500000;";
		else	if($price=='150萬以上')
			$str="select * from item where item_price >= 1500000;";
    else	if($price=='不限定')
			$str="select * from item where item_price > 0;";  
  }
  else
  {
   $str="select * from item where item_name like '請填售價' and item_color like '%' and item_power like '%'";
   echo "條件錯誤,請選擇 => 售價.<br><br>";  
  }  //if($price!='%')
	}




?>
<!--		<b><font color="#0066CC" size="4">搜尋結果如下:</font></b> -->
  <div id="wrapper">

					<table class="table table-hover" id="keywords" cellspacing="0" cellpadding="0">
						<thead>
              <tr>
				        <th align=center><font color="#000080" size=3 align=center>購買</font></th>
			         	<th colspan=1 align=center><font color="#000080"  size=3 align=center>廠牌</font></th>	
				        <th align=center><font color="#000080"  size=3 align=center>車款</font></th>	
    			      <th align=center><font color="#000080"  size=3 align=center>顏色</font></th>	
                <th align=center><font color="#000080"  size=3 align=center>排氣量</font></th>
                <th align=center><font color="#000080"  size=3 align=center>車型</font></th>
                <th align=center>
                <font color="#000080"  size=3 align=center>特性</font></th>
                <th align=center>
		            <font color="#000080"  size=3 align=center>售價</font></th>
							</tr>
             </thead>
             <tbody>

<?php
	$result=mysql_query($str);
if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

		$total=0;
		        while    ($row=mysql_fetch_array($result))
            {
						echo "<tr>";
              echo "<td class='lalign'><form action=bookCar.php method=post target=_top>
              
              <input type=hidden name=id value=$row[0]>
              <input type=submit value='前往購買'></form></td>";
              if($row[7]==1 || $row[7]==7 || $row[7]==13 || $row[7]==19 || $row[7]==25)
              echo "<td>TOYOTA</td>";  //item_id
              if($row[7]==2 || $row[7]==8 || $row[7]==14 || $row[7]==20 || $row[7]==26)
              echo "<td>BMW</td>";  //item_id
              if($row[7]==3 || $row[7]==9 || $row[7]==15 || $row[7]==21 || $row[7]==27)
              echo "<td>BENS</td>";  //item_id
              if($row[7]==4 || $row[7]==10 || $row[7]==16 || $row[7]==22 || $row[7]==28)
              echo "<td>PORSCHE</td>";  //item_id
              if($row[7]==5 || $row[7]==11 || $row[7]==17 || $row[7]==23 || $row[7]==29)
              echo "<td>NISSAN</td>";  //item_id
              if($row[7]==6 || $row[7]==12 || $row[7]==18 || $row[7]==24 || $row[7]==30)
              echo "<td>FORD</td>";  //item_id

              echo "<td>".$row[1]."</td>";  //item_name
							echo "<td align=center>".$row[2]."</td>";  //item_color
							echo "<td>".$row[4]."cc</td>";  //item_power
							echo "<td>".$row[5]."</td>";  //item_type
							echo "<td>".$row[6]."</td>";  //item_descr					
							echo "<td align=right>".$row[3]."元</td>";  //item_priec
						echo "</tr>";
						$total++;

				}
		echo	"</tbody></table><br></div>";
		echo "符合資料一共".$total."筆<br>";

		echo "<br>";
		?>
<?
	mysql_close($link);

?>

 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://tablesorter.com/__jquery.tablesorter.min.js'></script>

        <script src="js/index.js"></script>
</body>
</html>