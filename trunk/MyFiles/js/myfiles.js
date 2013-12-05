$(function() {
	/*-------------------------------LOG IN-----------------------------*/
	$( "#login-form" ).hide();
	
	$( "#btnLogin" ).click(function() {
		  $( "#login-form" ).show();
		  return false;
    });
	
	$( "#login-close" ).click(function() {
		  $( "#login-form" ).hide();
    });
	
	$( "#login-submit" ).click(function() {
		window.location.replace("Files");
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
		  $( "#signup-form" ).show();
		  return false;
    });
	
	$( "#signup-close" ).click(function() {
		  $( "#signup-form" ).hide();
    });
	
	$( "#signup-submit" ).click(function() {
		window.location.replace("Files");
    });
});
