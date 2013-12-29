<?php
	
	include_once("DataProvider.php");
	include_once("MailHandler.php");
	$email = $_REQUEST['email'];
 	$sql = "SELECT `email` FROM `account` WHERE `email` = '$email'";
	$count = DataProvider::ExecuteQuery($sql);
	if (mysql_num_rows($count) == 0)
	{
		echo '<p class="success">Email is not found!</p>';
		echo '<p class="success"><button id="try_itss" style="width:80px; height:30px;">Try it</button></p>';
		exit;
	}
	else
	{
		$now = 	date("sdi");	
		$password = md5($now);
		$query = "update `account` set `password` = '$password' where `email` like '".$email."'";
		DataProvider::ExecuteQuery($query);
		$body = "<p>Welcome to MyFiles! This is your new password:<br>";
		$body .= $now . "</p>";
		MailHandler::Send($email, "MyFiles  forget password", $body);
		?>
            <p ><img src="images/register-success.png"><br>
            Successfully!<br>
            Please check your email, A new password  will be sent to you via email in a few minutes.
            </p>
            <p ><button id="frm-btnLogin" style="width:80px; height:30px;">OK</button></p>
     	<?php
	}
?>