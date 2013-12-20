<?php session_start();?>
<?php
if (isset($_SESSION['myemail']))
{
	header('location: Files');
}
else
{
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>MyFiles</title>
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/login.css">
        <script src="js/jquery.js"></script>
        <script src="js/jquery.js"></script>
        <script>
			$(function() {	
				$('#errlogin').hide();
				$( "#login-submit" ).click(function() {					
					$.ajax({
						type: "POST", // phương thức gởi đi
						url: "controller/checkLogin.php", // nơi mà dữ liệu sẽ chuyển đến khi submit
						data: "email="+ $('#txtEmail').val() +"&password="+ $('#txtPassword').val() +"&remember="+ $('#remember').val(), // giá trị post
						success: function(answer){ // if everything goes well
							$('#errlogin').show();
							$('div.success').fadeIn(); // hiển thị thẻ div success
							$('div.success').html(answer);
						}
					});		 
				});
				
				$( "#login-close" ).click(function() {
					$('#errlogin').hide();
				});
				
				$( 'body' ).on('click', '#try_it', function(){
					$('#errlogin').hide();
				});
			});
		</script>
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
<!--==============================header=================================-->
		<header class="page1">
			<div class="container_12">
				<div class="grid_12">
					<h1><a href=""><img src="images/logo.png" alt="Gerald Harris attorney at law"></a></h1>
					
				</div>
				<div class="clear"></div>
			</div>
		</header>
<!--=======content================================-->	
			<div id="page5" class="content">
			<div class="container_12" style="margin-top:-100px;">
				<div class="map">
					<div class="grid_5 prefix_1">
						<form id="form">

						<fieldset>
						<label class="message"> Email:
						<input type="text" id="txtEmail" class="required email" value="">
						<br class="clear">
						</label>
						<label class="message">Password:
						<input type="password" id="txtPassword" class="required email"  value="">
						<br class="clear">
						</label>
						<div class="clear"></div>
                        
                        <label class="message">
					 	<input type="checkbox" name="remember" id="remember" style="float:left; width:20px;">
                        <label style="float:left; padding-top:9px;">Keep me logged in</label>
						<br class="clear">
						</label>
						<div class="clear"></div>
                       
						<div class="btns"><a data-type="submit" id="login-submit" class="link1">Log In</a>
						<div class="clear"></div>
						</div></fieldset></form>
					</div>
					<div class="clear"></div>
				</div>
          
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="copy">
						<a href=""><img src="images/footer_logo.png" alt=""></a>  &copy; 2013.<br> Website designed by Group 11<br>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
        
    <div class="dialog"  id="errlogin">
    <div id="container">
		<div class="btnclose" id="login-close"></div>
		<div class="success" style="display:none;">Nơi hiển thị kết quả</div>
	</div>   
	</div>
    
    
	</body>
</html>
<?php
}						
?>

