<?PHP
	 
	header("Content-Type:text/html; charset=utf-8");
	require("../dbUtil/pdo.php");
	
	$account=isset($_POST['account'])?$_POST['account']:" ";
	$name=isset($_POST['name'])?$_POST['name']:" ";
	$pwd=isset($_POST['pwd'])?$_POST['pwd']:" ";
	$sex=isset($_POST['sex'])?$_POST['sex']:" ";
	$birthday=isset($_POST['birthday'])?$_POST['birthday']:" ";
	$phone=isset($_POST['phone'])?$_POST['phone']:" ";
	$addr=isset($_POST['addr'])?$_POST['addr']:" ";

	
	try{
		$stmt = $conn->prepare("SELECT * FROM customer where cus_account= :cus_account");
	    $stmt->bindParam(':cus_account', $account);
 		$stmt->execute();

	    if ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
	    	echo '<script>alert("此帳戶已被註冊！")</script>';
	    }else {
	    	$stmt = $conn->prepare("INSERT INTO Customer (cus_account,cus_password, cus_name, cus_sex, cus_birthday, cus_phone, cus_addr) 
	    		VALUES (:account,:pwd, :name, :sex, :birthday, :phone, :addr)");
	    		$stmt->bindParam(':account', $account);
	    	$stmt->bindParam(':pwd', $pwd);
			$stmt->bindParam(':name', $name);
			$stmt->bindParam(':sex', $sex);
			$stmt->bindParam(':birthday', $birthday);
			$stmt->bindParam(':phone', $phone);
			$stmt->bindParam(':addr', $addr);

		    $stmt->execute();
		    }
	}
		catch(PDOException $e) {
 	   echo "Error: " . $e->getMessage();
	}
	$conn = null;