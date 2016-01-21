 
<?php include("../common/banner.php");  
	 require("../dbUtil/pdo.php");
	 $account=$_POST['account'];
	 $birthday=$_POST['birthday'];
	 $phone=$_POST['phone'];
	try{
		
		$stmt = $conn->prepare("SELECT * FROM customer where cus_account= :cus_account and cus_birthday=:cus_birthday");
	    $stmt->bindParam(':cus_account', $account);
	    $stmt->bindParam(':cus_birthday', $birthday);
 		$stmt->execute();
 		$row = $stmt->fetch(PDO::FETCH_ASSOC);
 	}catch(PDOException $e) {
 	   echo "Error: " . $e->getMessage();
	}
		

	if($account==" "){
		echo "資訊不足，請輸入完整資訊!!";
	
	}
	elseif($row['cus_account']==$account && $row['cus_birthday']==$birthday && $row['cus_phone']==$phone){
		echo "<p>您的密碼，請妥善保管。<br>".$row['cus_password']."</p>";
	}
	else
		echo"帳號或姓名錯誤";


	$conn = null;
?>
