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
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/forms.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/tms-0.4.1.js"></script>
        <script src="js/myfiles.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script><!-- js validation -->
		<script>
			$(document).ready(function(){
				$('.slider_wrapper')._TMS({
					show:0,
					pauseOnHover:false,
					prevBu:'.prev',
					nextBu:'.next',
					playBu:false,
					duration:800,
					preset:'fade',
					pagination:true,//'.pagination',true,'<ul></ul>'
					pagNums:false,
					slideshow:8000,
					numStatus:false,
					banners: 'fade',
					waitBannerAnimation:false,
					progressBar:false
				});
			});
			$(document).ready(function(){
				!function(){
			var map=[]
			 ,names=[]
			 ,win=$(window)
			 ,header=$('header')
			 ,currClass
			$('.content').each(function(n){
			 map[n]=this.offsetTop
			 names[n]=$(this).attr('id')
			})
			win
			 .on('scroll',function(){
				var i=0
				while(map[i++]<=win.scrollTop());
				if(currClass!==names[i-2])
				currClass=names[i-2]
				header.removeAttr("class").addClass(names[i-2])
			 })
			}(); });
					function goToByScroll(id){
				$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
				}
				$(document).ready(function(){
					$().UItoTop({ easingType: 'easeOutQuart' });
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
					<h1><a href="#" onClick="goToByScroll('page1'); return false;"><img src="images/logo.png" alt="Gerald Harris attorney at law"></a></h1>
					<div class="menu_block">
						<nav class="">
							<ul class="sf-menu">
								<li class="current men"><a onClick="goToByScroll('page1'); return false;" href="#">Home </a> <strong class="hover"></strong></li>
								<li class="men1"><a onClick="goToByScroll('page2'); return false;" href="#">About</a><strong class="hover"></strong></li>
								<li class=" men2"><a onClick="goToByScroll('page3'); return false;" href="#">Services</a> <strong class="hover"></strong></li>
								<li class=" men3"><a onClick="goToByScroll('page4'); return false;" href="#">Clients</a> <strong class="hover"></strong></li>
								<li class=" men4"><a onClick="goToByScroll('page5'); return false;" href="#">Contacts</a> <strong class="hover"></strong></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
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
			<div class="ic"></div>
			<div class="container_12">
				<div class="grid_12">
					<div class="slider_wrapper">
						<ul class="items">
							<li>
								<img src="images/spacer.gif" alt="">
								<div class="caption banner">
									<h2>Let Us Show You the Way to Success</h2>
								</div>
							</li>
							<li>
								<img src="images/spacer.gif" alt="">
								<div class="caption banner">
									<h2>Interminable Energy for Your Project</h2>
								</div>
							</li>
							<li>
								<img src="images/spacer.gif" alt="">
								<div class="caption banner">
									<h2>We know how to solve your problems!</h2>
								</div>
							</li>
							<li>
								<img src="images/spacer.gif" alt="">
								<div class="caption banner">
									<h2>Make your business a booming one!</h2>
								</div>
							</li>
						</ul>
					</div>
					<div class="socials">
						<a href="#"></a>
						<a href="#"></a>
						<a href="#"></a>
						<a href="#"></a>
					</div>
				</div>
			</div>
		</div>
		<div id="page2" class="content">
			<div class="container_12">
				<div class="grid_12">
					<div class="slogan">
						<h3>Only Professional <a onClick="goToByScroll('page3'); return false;" href="#"><span>Services</span></a> for Our <a onClick="goToByScroll('page4'); return false;" href="#"><em>Clients</em></a></h3>
						<div class="text1">
							<a href="http://blog.templatemonster.com/free-website-templates/" rel="nofollow" class="tm_link"> Click here</a> for more info about this free website template created by TemplateMonster.com <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis erat mattis neque facilisis, sit amet ultricies
						</div>
					</div>
				</div>
				<div class="grid_32">
					<div class="box maxheight">
						<img src="images/thieuquang.jpg" alt="">
						<div class="text1"><a href="#">Đàm Thiệu Quang</a></div>
						<div class="socials1">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
						</div>
					</div>
				</div>
                <div class="grid_32">
					<div class="box maxheight">
						<img src="images/yenu.jpg" alt="">
						<div class="text1"><a href="#">Nguyễn Thị Yến</a></div>
						<div class="socials1">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
						</div>
					</div>
				</div>
                <div class="grid_32">
					<div class="box maxheight">
						<img src="images/quanghau.jpg" alt="">
						<div class="text1"><a href="#">Trần Quang Hậu</a></div>
						<div class="socials1">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
						</div>
					</div>
				</div>
                <div class="grid_32">
					<div class="box maxheight">
						<img src="images/haunguyen.jpg" alt="">
						<div class="text1"><a href="#">Nguyễn Trung Hậu</a></div>
						<div class="socials1">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
						</div>
					</div>
				</div>
                <div class="grid_32">
					<div class="box maxheight">
						<img src="images/hoanglong.jpg" alt="">
						<div class="text1"><a href="#">Nguyễn Hoàn Long</a></div>
						<div class="socials1">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
						</div>
					</div>
				</div>
                <div class="grid_32">
					<div class="box maxheight">
						<img src="images/thanhtien.jpg" alt="">
						<div class="text1"><a href="#">Huỳnh Thanh Tiến</a></div>
						<div class="socials1">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
						</div>
					</div>
				</div>
                <div class="grid_32">
					<div class="box maxheight">
						<img src="images/Lincoln94.jpg" alt="Đại Ka">
						<div class="text1"><a href="#">Nguyễn Văn Linh</a></div>
						<div class="socials1">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
						</div>
					</div>
				</div>
				<div class="grid_32">
					<div class="box maxheight">
						<img src="images/ngocanh.jpg" alt="">
						<div class="text1"><a href="#">Nguyễn Thị Ngọc Anh</a></div>
						<div class="socials1">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
						</div>
					</div>
				</div>
				<div class="grid_32">
					<div class="box maxheight">
						<img src="images/thethong.jpg" alt="">
						<div class="text1"><a href="#">Nguyễn Thế Thông</a></div>
						<div class="socials1">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
						</div>
					</div>
				</div>
				<div class="grid_32">
					<div class="box maxheight">
						<img src="images/ledieu.jpg" alt="">
						<div class="text1"><a href="#">Lê Đình Diệu</a></div>
						<div class="socials1">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="page3" class="content">
			<div class="container_12">
				<div class="grid_12">
					<div class="slogan">
						<h3>Our Services</h3>
						<div class="text1">
							Vivamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum a, commodo luctus libero. Praesent faucibus malesuada faucibus. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed nulla facilisis consequat. Curabitur vel lorem sit amet nulla ullamcorper fermentum.  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</div>
					</div>
				</div>
				<div class="grid_3">
					<div class="box maxheight1">
						<img src="images/box1_img1.png" alt="">
						<div class="text1"><a href="#">Strategy</a></div>Vivamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum a, commodo luctus libero.
					</div>
				</div>
				<div class="grid_3">
					<div class="box maxheight1">
						<img src="images/box1_img2.png" alt="">
						<div class="text1"><a href="#">Research</a></div>Ite auctor non pellentesque vel, aliquet sit amet erat. Nullam eget dignissim nisi, aliquam feugiat nibhh sagittis ut.
					</div>
				</div>
				<div class="grid_3">
					<div class="box maxheight1">
						<img src="images/box1_img3.png" alt="">
						<div class="text1"><a href="#">Development</a></div>Praesent faucibusamus ater asmagna non nunc tristique rhoncus. Aliquam nib ante, tas id dictum aluctus libero.
					</div>
				</div>
				<div class="grid_3">
					<div class="box maxheight1">
						<img src="images/box1_img4.png" alt="">
						<div class="text1"><a href="#">Consulting</a></div>Etiam dui eros na non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum a commodo luctus libero.
					</div>
				</div>
			</div>
		</div>
		<div id="page4" class="content">
			<div class="container_12">
				<div class="grid_12">
					<h3>Our Clients</h3>
				</div>
				<div class="companies">
					<div class="grid_3">
						<img src="images/logo1.jpg" alt="">
						<div class="text1">THP Group</div>Aliquam nibh ante, egestas id dictum  wrecommodo luctus liberoaesent.
						<br>
						<a href="http://www.thp.com.vn/" target="_blank">Go to Site</a>
					</div>
					<div class="grid_3">
						<img src="images/logo2.jpg" alt="">
						<div class="text1">VNG Group</div>VNG Corporation was established in Vietnam in 2004 under the name Vinagame. It is an internet company whose main businesses are game publisher, e-commerce, and social networking sites.VNG was the first to launch a licensed online game in Vietnam.
						<br>
						<a href="http://vng.com.vn/" target="_blank">Go to Site</a>
					</div>
					<div class="grid_3">
						<img src="images/logo3.jpg" alt="">
						<div class="text1">Co-opmart</div>Quisque viverra nulla nunc, eu ultrices wertlibero ultricies egetasellus um.
						<br>
						<a href="http://www.co-opmart.com.vn/" target="_blank">Go to Site</a>
					</div>
					<div class="grid_3">
						<img src="images/logo4.jpg" alt="">
						<div class="text1">Công ty Cổ phần Thương mại Nguyễn Kim.</div>Courrewerwe abitur vel lorem sit amet ulla ullamcorper fermentumn vitae.
						<br>
						<a href="http://www.nguyenkim.com/" target="_blank">Go to Site</a>
					</div>
					<div class="clear"></div>					
				</div>
			</div>
		</div>
		<div id="page5" class="content">
			<div class="container_12">
				<div class="grid_12">
					<div class="slogan">
						<h3>Get in Touch</h3>
						<div class="text1">
							Gyrto ivamus at magna non nunc tristique rhoncusu. Lliquam nibh ante, egestas id dictum a, commodo luctus mibero. Praesent faucibus malesuada faucibu. Monec laoreet metus id laoreet malesuadw.
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<div class="map">
					<div class="grid_3">
						<div class="text1">Address</div>
						<address>
							<dl>
								<dt>Đại Học Khoa Học Tự Nhiên TP.Hồ Chí Minh<br>
								227 Nguyễn Văn Cừ,<br>
								phường 4, quận 5, TP.Hồ Chí Minh, Việt Nam.
								</dt>
								<dd><span>Freephone:</span>1080</dd>
								<dd><span>Telephone:</span>1080</dd>
								<dd><span>FAX:</span>1080</dd>
								<dd>E-mail: <a href="#" class="link-1">dtquang@gmail.com</a></dd>
								<dd>Skype: <a href="#" class="link-1">damthieuquang@skype</a></dd>
							</dl>
						</address>
					</div>
					<div class="grid_3">
						<div class="text1">&nbsp;</div>
						<figure class="">
							<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Ho+Chi+Minh+City+University+of+Science&amp;aq=&amp;sll=10.761789,106.681645&amp;sspn=0.012522,0.021136&amp;ie=UTF8&amp;hq=Ho+Chi+Minh+City+University+of+Science&amp;hnear=&amp;radius=15000&amp;t=m&amp;ll=10.762822,106.682439&amp;spn=0.020237,0.027466&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Ho+Chi+Minh+City+University+of+Science&amp;aq=&amp;sll=10.761789,106.681645&amp;sspn=0.012522,0.021136&amp;ie=UTF8&amp;hq=Ho+Chi+Minh+City+University+of+Science&amp;hnear=&amp;radius=15000&amp;t=m&amp;ll=10.762822,106.682439&amp;spn=0.020237,0.027466&amp;z=15&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
						</figure>
					</div>
					<div class="grid_5 prefix_1">
						<div class="text1">Ask a Question</div>
						<form id="form">
						<div class="success_wrapper">
						<div class="success">Contact form submitted!<br>
						<strong>We will be in touch soon.</strong> </div></div>
						<fieldset>
						<label class="name">
						<input type="text" value="Name:">
						<br class="clear">
						<span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label>
						<label class="email">
						<input type="text" value="E-mail:">
						<br class="clear">
						<span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>
						<label class="message">
						<textarea>Message:</textarea>
						<br class="clear">
						<span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
						<div class="clear"></div>
						<div class="btns"><a data-type="submit" class="link1">Send</a>
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
		<form id="formForgot" onSubmit="return false">
		
		<label for="name">Email:</label>
		
		<input type="name" id="email-forgot">
        <p><br><a href="" id="back-login">Back to login</a></p>
		
		<div id="lower">
		
		<input type="submit" value="Send" id="forgot-submit">
		
		</div>
		
		</form>
	</div>   
</div>     

<!--==============================Sign up=================================-->
<div class="dialog" id="signup-form">
    <div id="container" style="margin-top:-200px;">
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

<?php
}						
?>