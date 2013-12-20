<?php
	session_start();
	ob_start();
	include_once("DataProvider.php");
	include_once("MailHandler.php");
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
		$total = 0;
		$query = "insert into `account` (`password`,`email`,`accounttype_id`,`total`, `status`) values('{$password}','{$email}',{$type_id},{$total}, 'block')";
		$result = DataProvider::ExecuteQuery($query);
		if ($result)
		{
			$query = "SELECT account_id FROM ACCOUNT WHERE EMAIL like '".$email."'";
			$result = DataProvider::ExecuteQuery($query);
			$re = mysql_fetch_array($result,MYSQL_ASSOC);
			$linlactive = "http://localhost/MyFiles/active.php?id=" . $re['account_id'];
			$body = "<p>Welcome to MyFiles! Please click on the following link to confirm your free MyFiles account:<br>";
			$body .= "<a href='".$linlactive."' target='_blank'>LINK</a><br><br>Best regards.</p>";
			MailHandler::Send($email, "MyFiles Sign up", $body);
			?>
            <p ><img src="images/register-success.png"><br>
            Created an account successfully!<br>
            Please check your email and click the link to confirm your account
            </p>
            <p ><button id="frm-btnLogin" style="width:80px; height:30px;">OK</button></p>
            <?php
		}
		else
		{
			echo '<p class="success">Created an account failure!</p>';
		}
	}
	ob_end_flush();
?>
