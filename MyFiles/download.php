<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>MyFiles</title>
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/download.css">
		<script src="js/jquery.js"></script>
        <script src="js/myfiles.js"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
		
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="">
	<?php session_start();?>
<!--==============================header=================================-->
		<header class="page1">
			<div class="container_12">
				<div class="grid_12">
					<h1><a href=""><img src="images/logo.png" alt="Gerald Harris attorney at law"></a></h1>
					
                    <div class="menu_block2">
                    <div class="btnsheader">
                    	<a id="btnLogin" href="">Log In</a>
                        <a id ="btnSignUp" href="">Sign Up</a>
                        <div class="clear"></div>
                    </div>	
                    </div>   
				</div>
				<div class="clear"></div>
			</div>
		</header>
<!--=======content================================-->
		<div id="page1" class="content">
<?php
		if(isset($_GET["file"]))
		{
?>       
     <div class="container">
	<section id="content">

    	<form action="">
			<h1><?php echo $_GET["file"]?></h1>
			
		</form><!-- form -->
			<div class="button">
			<?php
            	// echo "<a  href="."./Files/php/connector.php?cmd=file&target=".$_GET["target"]."&download=".$_GET["download"].">Download  file</a>";
			?>
            <a href="#">Download source file</a>
		</div><!-- button -->      
			</section><!-- content -->
</div><!-- container -->
<?php
		}
		else
		{
?>
		<div id="filenotfound" style="font-size:24px; color:#000">File not found</div>
<?php
		}
?>  
		</div>
		
<!--==============================footer=================================-->
		<footer id="footer">
			<div class="container_12">
				<div class="grid_12">
					<div class="copy">
						<a href=""><img src="images/footer_logo.png" alt=""></a>  &copy; 2013. <br>Website designed by Group 11.<br>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
        
<!--==============================login=================================-->
<div class="dialog"  id="login-form">
    <div id="container">
		<div class="btnclose" id="login-close"></div>
		<form id="frmLogin" action="controller/checkLogin.php" method="post">
		
		<label for="name">Email:</label>
		
		<input type="name" name="txtEmail" id="txtEmail" class="required email">
		<br/>
		<label for="username">Password:</label>
				
		<input type="password" name="txtPassword" id="txtPassword" class="required">
        <br/>
		<p><br><a href="" id="forgot-pwd">Forgot Password?</a></p>
		
		<div id="lower">
		
		<input type="checkbox" name="remember" id="remember"><label class="check" for="checkbox">Keep me logged in</label>
		
		<input type="submit" value="Login" id="login-submit">
		
		</div>
		</form>
		<div class="success" style="display:none;">Nơi hiển thị kết quả</div>
	</div>   
</div>

<!--==============================Forgot your password?=================================-->
<div class="dialog"  id="forgot-form">
    <div id="container">
		<div class="btnclose" id="forgot-close"></div>
		<form onSubmit="return false">
		
		<label for="name">Email:</label>
		
		<input type="name">
        <p><br><a href="" id="back-login">Back to login</a></p>
		
		<div id="lower">
		
		<input type="submit" value="Send" id="forgot-submit">
		
		</div>
		
		</form>
	</div>   
</div>     

<!--==============================Sign up=================================-->
<div class="dialog" id="signup-form">
    <div id="container">
		<div class="btnclose" id="signup-close"></div>
		<form id="frmSignup" action="controller/checkSignup.php" method="post">
		
		<label for="name">Email:</label>
		
		<input type="name" name="Email" id="Email" class="required email"><br/>
		
		<label for="username">Password:</label>
		
		<input type="password" name="Password" id="Password" minlength="6" class="required"><br/>
		
        <label for="username">Re-Password:</label>
		
		<input type="password" name="rePassword" id="rePassword" minlength="6" class="required"><br/>
		
		<div id="lower">
		<input type="submit" value="Sign Up" id="signup-submit">
		</div>
		</form>
		<div class="success" style="display:none;">Nơi hiển thị kết quả</div>
	</div>   
</div>  

	</body>
</html>

