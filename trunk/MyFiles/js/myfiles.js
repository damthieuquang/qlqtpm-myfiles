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