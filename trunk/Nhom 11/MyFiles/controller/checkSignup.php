<?php
	session_start();
	ob_start();
	include_once("DataProvider.php");
	if($_POST){
		// Đưa dữ liệu vào các biến
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$repassword = md5($_POST['repassword']);
		
		$email=strip_tags(mysql_real_escape_string($email)); 
		$password=strip_tags(mysql_real_escape_string($password));
		$repassword=strip_tags(mysql_real_escape_string($repassword));
		
        $sql = "SELECT EMAIL FROM ACCOUNT WHERE EMAIL = '$email'";
		$count = DataProvider::ExecuteQuery($sql);
		if (mysql_num_rows($count) == 1)
		{
			echo '<p class="success">Email is not available!</p>';
			echo '<p class="success"><button id="try_its" style="width:80px; height:30px;">Try it</button></p>';
			exit;
		}
		if ( $password != $repassword )
		{
			echo '<p class="success">Passwords do not match!</p>';
			echo '<p class="success"><button id="try_its" style="width:80px; height:30px;">Try it</button></p>';
			exit;
		}
		$type_id = 1;
		$total = 99;
		$query = "insert into `account` (`password`,`email`,`accounttype_id`,`total`) values('{$password}','{$email}',{$type_id},{$total})";
		$result = DataProvider::ExecuteQuery($query);
		if ($result)
		{
			echo '<p class="success">Created an account successfully!</p>';
			echo '<p class="success"><button id="frm-btnLogin" style="width:80px; height:30px;">Login</button></p>';
		}
		else
		{
			echo '<p class="success">Created an account failure!</p>';
		}
	}
	ob_end_flush();
?>
