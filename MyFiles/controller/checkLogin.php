<?php
	session_start();
	ob_start();
	include_once("DataProvider.php");
	if($_POST){
		// Đưa dữ liệu vào các biến
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		
		$email=strip_tags(mysql_real_escape_string($email)); 
		$password=strip_tags(mysql_real_escape_string($password));
		
        $query = "SELECT * FROM ACCOUNT WHERE EMAIL = '$email' AND PASSWORD = '$password' and `status` like 'active'";
		$result = DataProvider::ExecuteQuery($query);
		$re = mysql_fetch_array($result,MYSQL_ASSOC);
		if (mysql_num_rows($result) == 1)
		{
			$_SESSION['myemail'] = $email;
			$_SESSION['fileid'] = $re['account_id'];
			$year = time() + 31536000;
			if($_POST['remember']) {
				setcookie('myemail', $email, $year);
			}
			else if(!$_POST['remember']) {
				if(isset($_COOKIE['myemail'])) {
					$past = time() - 100;
					setcookie('myemail', "", $past);
				}
			}
			?>
            <p ><img src="images/register-success.png"><br>
            Login successfully!
            </p>
			<script type='text/JavaScript'>setTimeout('location.href ="Files";',1500);</script>
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
