<?php
	include_once("DataProvider.php");
	if($_POST){
		// Đưa dữ liệu vào các biến
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		
		$email=strip_tags(mysql_real_escape_string($email)); 
		$password=strip_tags(mysql_real_escape_string($password));
		
        $query = "SELECT * FROM `account` WHERE `email` = '$email'";
		$result = DataProvider::ExecuteQuery($query);
		$re = mysql_fetch_array($result,MYSQL_ASSOC);
		if (mysql_num_rows($result) == 1)
		{
			if($password == $re["password"])
			{
				$sql = "update `account` set `status` = 'active' where `account_id` = " . $re["account_id"];
				DataProvider::ExecuteQuery($sql);
				echo 0;
			}
			else
			{
				echo 1;
			}
		}
		else
		{
			echo 2;
		}	
	}
?>