$(function() {
	$("#filenotfound").height($(window).height()-($("#page1").height()+$("#footer").height()+300));
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
		$( "#formForgot" )[0].reset();
		$( "#login-form" ).hide();
		$( "#forgot-form" ).show();
		return false;
    });
	
	
	/*-------------------------------Forgot your password?-----------------------------*/
	$( "#forgot-form" ).hide();
	
	$( "#forgot-close" ).click(function() {
		$('div.success').fadeOut(0);
		$('form#formForgot').show();
		$( "#forgot-form" ).hide();
		  
    });
	
	$( "#forgot-submit" ).click(function() {
		if($("#email-forgot").val() ==""){
			return;
		}
		$.ajax({
			type: "POST", // phương thức gởi đi
			url: "controller/forgotPassword.php", // nơi mà dữ liệu sẽ chuyển đến khi submit
			data: "email="+ $("#email-forgot").val(), // giá trị post
			success: function(answer){ // if everything goes well
				$('form#formForgot').hide(); // ẩn form đi
				$('div.success').fadeIn(); // hiển thị thẻ div success
				$('div.success').html(answer); // đặt kết quả trả về từ checkLogin.php vào thẻ div success
			}
		});
    });
	
	$( "#back-login" ).click(function() {
		$( "#frmLogin" )[0].reset();
		$( "#login-form" ).show();
		$( "#forgot-form" ).hide();
		return false;
    });
	
	$( 'body' ).on('click', '#try_itss', function(){
		  $('div.success').fadeOut(0);
		  $('form#formForgot').show();
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
		  $('form#formForgot').show();
		  $( "#forgot-form" ).hide();
		   $('form#frmChangepass').show();
		  $( "#changepass-form" ).hide();
		  return false;
    });
	
	/*-------------------------------CHANGE PASSWORD-----------------------------*/
	$( "#changepass-form" ).hide();
	
	$( "#btnChange" ).click(function() {
		$( "#frmChangepass" )[0].reset();
		$( "#changepass-form" ).show();
		return false;
    });
	
	$( "#changepass-close" ).click(function() {
		$('div.success').fadeOut(0);
		$('form#frmChangepass').show();
		$( "#changepass-form" ).hide();
    });
	
	$( "#changePass-submit" ).click(function() {
		
		var newPass     = $('#newPass');
		var reNewPass   = $('#reNewPass');
		if( newPass.val() == "" || reNewPass.val() == "" ){
			return;
		}
		
		$.ajax({
			type: "POST", // phương thức gởi đi
			url: "controller/changePassword.php", // nơi mà dữ liệu sẽ chuyển đến khi submit
			data: "id=" + $("#account-id").val() +"&newPass="+ newPass.val() +"&reNewPass="+ reNewPass.val(), // giá trị post
			success: function(answer){ // if everything goes well
				$('form#frmChangepass').hide(); // ẩn form đi
				$('div.success').fadeIn(); // hiển thị thẻ div success
				$('div.success').html(answer); // đặt kết quả trả về từ checkSignup.php vào thẻ div success
			}
		});
    });


	$( 'body' ).on('click', '#OKchange', function(){
		  $('div.success').fadeOut(0);
		  $('form#frmChangepass').show();
		  return false;
    });
	
	$( 'body' ).on('click', '#OKchange', function(){
		  $('div.success').fadeOut(0);
		  $('form#frmChangepass').show();
		  return false;
    });
	
	$( "#ugProfessional" ).click(function() {
		$.ajax({
			type: "POST", // phương thức gởi đi
			url: "controller/upgrade.php", // nơi mà dữ liệu sẽ chuyển đến khi submit
			data: "id=" + $("#account-id").val() + "&type=2",
			success: function(){ // if everything goes well
				window.location.reload();	
			}
		});
	});
	
	$( "#ugTeams" ).click(function() {
		$.ajax({
			type: "POST", // phương thức gởi đi
			url: "controller/upgrade.php", // nơi mà dữ liệu sẽ chuyển đến khi submit
			data: "id=" + $("#account-id").val() + "&type=3",
			success: function(){ // if everything goes well
				window.location.reload();	
			}
		});
	});
});
