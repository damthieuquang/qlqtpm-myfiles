<?php
	session_start();
	ob_start();
	include_once("DataProvider.php");
	if($_POST){
		// Đưa dữ liệu vào các biến
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		
		//$email=strip_tags(mysql_real_escape_string($email)); 
		//$password=strip_tags(mysql_real_escape_string($password));
		
        $query = "SELECT * FROM  `account` WHERE `email` = '$email' AND `password` = '$password' and `status` like 'admin'";
		$result = DataProvider::ExecuteQuery($query);
		$re = mysql_fetch_array($result,MYSQL_ASSOC);
		if (mysql_num_rows($result) == 1)
		{
			$_SESSION['admin'] = $email;
			$_SESSION['fileid'] = $re['account_id'];
			$year = time() + 31536000;
		
			?>
            <p ><img src="../images/register-success.png"><br>
            Login successfully!
            </p>
			<script type='text/JavaScript'>setTimeout('location.href ="";',1500);</script>
			<?php
		}
		else
		{
			echo '<p class="success">Email or password is not correct!</p>';
			echo '<p class="success"><button id="try_it" style="width:80px; height:30px;">Try it</button></p>';
		}	
	}
	ob_end_flush();
?>
