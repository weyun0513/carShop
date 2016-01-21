<?php
require("server.php");
echo "<br>";
//$a=mysql_query("INSERT INTO `apple`.`table3`(`id3`,`name3`) VALUES(NULL,'台北科技大學')");
$a=mysql_query("SELECT * FROM `table1` LIMIT 0 , 30");
$result =mysql_fetch_array($a);

if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

while($row = mysql_fetch_array($result))
{
    echo $row['name'];
}
?>