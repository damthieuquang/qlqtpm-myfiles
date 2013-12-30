<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>MyFiles | User Manager</title>
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/stylemin.css">
        <link rel="stylesheet" href="../css/login.css">
        
        <script src="../js/jquery.js"></script>
        <script>
		$(function() {	
				$('#errlogin').hide();
				$( "#login-submit" ).click(function() {					
					$.ajax({
						type: "POST", // phương thức gởi đi
						url: "../controller/admin.php", // nơi mà dữ liệu sẽ chuyển đến khi submit
						data: "email="+ $('#txtEmail').val() +"&password="+ $('#txtPassword').val(), // giá trị post
						success: function(answer){ // if everything goes well
							$('#errlogin').show();
							$('form#frmLogin').hide();
							$('div.success').fadeIn(); // hiển thị thẻ div success
							$('div.success').html(answer);
						}
					});		 
				});
				
				$( 'body' ).on('click', '#try_it', function(){
					$('#errlogin').hide();
					$('form#frmLogin').show();
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
    <?php 
    if (isset($_SESSION['admin'])) 
    {
    ?>
<!--==============================header=================================-->
	<h2>Hi <span style="color:#00ffff" > <?php echo $_SESSION['admin']; ?> </span> | <a href="../controller/checkLogout.php">Logout</a></h2>
		<header class="page1">
			<div class="container_12">
				<div class="grid_12">
					<h1><a href="" ><img src="images/logo.png"></a></h1>
				</div>
				<div class="clear"></div>
				<h1>| User manager</h1>
			</div>
		</header>
		<section>
			<div id="content">
				<table>
					<tr>
						<td width="6%" class="td1"><b>STT</b></td>
						<td width="12%" class="td1"><b>ACCOUT_ID</b></td>
						<td width="28%" class="td2"><b>EMAIL</b></td>
						<td width="10%" class="td1"><b>ACCOUTTYPE_ID</b></td>
						<td width="14%" class="td2"><b>TOTAL</b></td>
						<td width="20%" class="td2"><b>STATUS</b></td>
					</tr>
					<?php
						include_once("../controller/DataProvider.php");
						$query = "SELECT * FROM `account` where `status` not like 'admin'";
						$result = DataProvider::ExecuteQuery($query);
						$dem = 1;
						while($row = mysql_fetch_array($result,MYSQL_ASSOC))
						{
							?>
					<tr>
						<td class="td1"><?php echo $dem;?></td>
						<td class="td1"><?php echo $row["account_id"];?></td>
						<td class="td2"><?php echo $row["email"];?></td>
						<td class="td1"><?php echo $row["accounttype_id"];?></td>
						<td class="td2"><?php echo $row["total"];?></td>
						<td class="td2"><?php echo $row["status"];?></td>
					</tr>
							<?php
							$dem++;
						}
					?>
				</table>
			</div>
		</section>
		
<!--==============================footer=================================-->
	<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="copy">
						<a href=""><img src="images/footer_logo.png" alt="" style="float:left;"></a>  <div style="margin: 0 0 10px 10px; float:left;" >&copy; 2013.</div> <div style="float:none; margin-top:35px;">Website designed by Group 11.</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
<?php
}
else
{
	?>
    <div class="dialog"  id="login-form">
    <div id="container">
		<form id="frmLogin" onSubmit="return false">
		
		<label for="name">Email:</label>
		
		<input type="name" name="txtEmail" id="txtEmail" class="required email">
		<br/>
		<label for="username">Password:</label>
				
		<input type="password" name="txtPassword" id="txtPassword" class="required">
        <br/>
		
		<div id="lower">
		
		<input type="submit" value="Login" id="login-submit">
		
		</div>
		</form>
	</div>   
</div>

 <div class="dialog"  id="errlogin">
    <div id="container">
		<div class="success" style="display:none;">Nơi hiển thị kết quả</div>
	</div>   
	</div>
	<?php
}
?>
	</body>
</html>

