$(function() {
	/*-------------------------------LOG IN-----------------------------*/
	$( "#login-form" ).hide();
	
	$( "#btnLogin" ).click(function() {
		$( "#frmLogin" )[0].reset();
		$( "#login-form" ).show();
		return false;
    });
	
	$( "#login-close" ).click(function() {
		$('div.success').fadeOut(0);
		$('form#frmLogin').show();
		$( "#login-form" ).hide();
    });
	
	$( "#login-submit" ).click(function() {
		$(document).ready(function(){
			$("#frmLogin").validate({
				errorElement: "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
				submitHandler: function(form) {
					// Validate thành công sẽ lấy dữ liệu từ form và gởi đến checkLogin.php
					var email        = $('#txtEmail').attr('value');
					var password     = $('#txtPassword').attr('value');
					var remember	 = $('#remember').attr('value');
					
					$.ajax({
						type: "POST", // phương thức gởi đi
						url: "controller/checkLogin.php", // nơi mà dữ liệu sẽ chuyển đến khi submit
						data: "email="+ email +"&password="+ password +"&remember="+ remember, // giá trị post
						success: function(answer){ // if everything goes well
							$('form#frmLogin').hide(); // ẩn form đi
							$('div.success').fadeIn(); // hiển thị thẻ div success
							$('div.success').html(answer); // đặt kết quả trả về từ checkLogin.php vào thẻ div success
						}
					});
					return false;  // Form sẽ không chuyển đến trang checkLogin.php
				 }
			});
		});
    });
	
	$( 'body' ).on('click', '#try_it', function(){
		  $('div.success').fadeOut(0);
		  $('form#frmLogin').show();
		  return false;
    });
	
	$( "#forgot-pwd" ).click(function() {
		$( "#login-form" ).hide();
		$( "#forgot-form" ).show();
		return false;
    });
	
	
	/*-------------------------------Forgot your password?-----------------------------*/
	$( "#forgot-form" ).hide();
	
	$( "#forgot-close" ).click(function() {
		  $( "#forgot-form" ).hide();
    });
	
	$( "#forgot-submit" ).click(function() {
		window.location.replace("Files");
    });
	
	$( "#back-login" ).click(function() {
		$( "#login-form" ).show();
		$( "#forgot-form" ).hide();
		return false;
    });
	
	/*-------------------------------SIGN UP-----------------------------*/
	$( "#signup-form" ).hide();
	
	$( "#btnSignUp" ).click(function() {
		$( "#frmSignup" )[0].reset();
		$( "#signup-form" ).show();
		return false;
    });
	
	$( "#signup-close" ).click(function() {
		$('div.success').fadeOut(0);
		$('form#frmSignup').show();
		$( "#signup-form" ).hide();
    });
	
	$( "#signup-submit" ).click(function() {
		$(document).ready(function(){
			$("#frmSignup").validate({
				errorElement: "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
				submitHandler: function(form) {
					// Validate thành công sẽ lấy dữ liệu từ form và gởi đến checkSignup.php
					var email        = $('#Email').attr('value');
					var password     = $('#Password').attr('value');
					var repassword   = $('#rePassword').attr('value');
					
					$.ajax({
						type: "POST", // phương thức gởi đi
						url: "controller/checkSignup.php", // nơi mà dữ liệu sẽ chuyển đến khi submit
						data: "email="+ email +"&password="+ password +"&repassword="+ repassword, // giá trị post
						success: function(answer){ // if everything goes well
							$('form#frmSignup').hide(); // ẩn form đi
							$('div.success').fadeIn(); // hiển thị thẻ div success
							$('div.success').html(answer); // đặt kết quả trả về từ checkSignup.php vào thẻ div success
						}
					});
					return false;  // Form sẽ không chuyển đến trang checkSignup.php
				 }
			});
		});
    });
	
	$( 'body' ).on('click', '#try_its', function(){
		  $('div.success').fadeOut(0);
		  $('form#frmSignup').show();
		  return false;
    });
	
	$( 'body' ).on('click', '#frm-btnLogin', function(){
		  $('div.success').fadeOut(0);
		  $('form#frmSignup').show();
		  $( "#signup-form" ).hide();
		  $( "#login-form" ).show();
		  return false;
    });
});
