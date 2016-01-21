<?PHP
		if(session_status()==PHP_SESSION_NONE){ session_start();}
	header("Content-Type:text/html; charset=utf-8");
	require("../dbUtil/pdo.php");
	
	$account=isset($_POST['account'])?$_POST['account']:" ";
	$pwd=isset($_POST['password'])?$_POST['password']:" ";

	if($account=='' && $pwd==''){			//已登入狀態設定
		$account=$_SESSION["cus_account"];
		$pwd=$_SESSION["cus_pwd"];
		
	}
	try{
		$stmt = $conn->prepare("SELECT * FROM customer where cus_account= :cus_account");
	    $stmt->bindParam(':cus_account', $account);
 		$stmt->execute();
 		$row = $stmt->fetch(PDO::FETCH_ASSOC);
 	
	    if($row['cus_account'] == $account && $row['cus_password'] == $pwd) {
			$_SESSION['cus_account']=$account;
			$_SESSION['login'] = 'true';
      $url='../searchCar/search.php';
			echo '<script>window.location = "'.$url.'";</script>';
			die();
	    }elseif ($row['cus_account'] == $account && $row['cus_password'] != $pwd) {
	    	echo "密碼輸入錯誤";
	    }else {
	    	echo "帳戶不存在";
	    }

	}
	catch(PDOException $e) {
 	   echo "Error: " . $e->getMessage();
	}
	$conn = null;
?>