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
		
        $query = "SELECT * FROM ACCOUNT WHERE EMAIL = '$email' AND PASSWORD = '$password'"; echo $query;
		$result = DataProvider::ExecuteQuery($query);
		if (mysql_num_rows($result) == 1)
		{
			$_SESSION['myemail'] = $email;
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
			<script type='text/JavaScript'>setTimeout('location.href ="Files";',0);</script>
			<?php
		}
		else
		{
			echo '<p class="success">Username or password is blank!</p>';
			echo '<p class="success"><button id="try_it" style="width:80px; height:30px;">Try it</button></p>';
		}	
	}
	ob_end_flush();
?>
