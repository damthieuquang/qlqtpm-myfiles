<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>MyFiles</title>
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/download.css">
		<script src="js/jquery.js"></script>
        <script>
		$(function() {
			$("#content").height(70);
			$("#page1").height($(window).height()-430);
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
	<?php session_start();?>
<!--==============================header=================================-->
		<header class="page1">
			<div class="container_12">
				<div class="grid_12">
					<h1><a href="#" onClick="goToByScroll('page1'); return false;"><img src="images/logo.png" alt="Gerald Harris attorney at law"></a></h1>
					
                    <div class="menu_block2">
                    <div class="btnsheader">
                        <div class="clear"></div>
                    </div>	
                    </div>   
				</div>
				<div class="clear"></div>
			</div>
		</header>
<!--=======content================================-->
	<div id="page1" class="content" style="min-height:200px;">
        
     <div class="container" id="ctdown">
     
	 <?php
	 if(isset($_GET["name"]) || isset($_GET["target"])|| isset($_GET["download"]) )
	 {
	 	echo'<div><p style="color:black;font-size:200%;">'.$_GET["name"].'</p </div>';
	?>
	<section id="content">
	
		<form action="">
		
			<div class="button">
			<?php
			echo "<a  href="."./Files/php/connector.php?cmd=file&target=".$_GET["target"]."&download=".$_GET["download"].">Download</a>";
			?>
		</div><!-- button -->
		</form><!-- form -->
			</section><!-- content -->
            <?php
	 }
	 else
	 {
		 echo'<div><p style="color:black;font-size:200%;"> File not found</p </div>';
	 }
?>		
            
</div><!-- container -->
		</div>

</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="copy">
						<a href=""><img src="images/footer_logo.png" alt=""></a>  &copy; 2013. <br>Website designed by Group 11.<br>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
        
	</body>
</html>

