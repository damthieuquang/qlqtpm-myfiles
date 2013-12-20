$(function() {	
	$( "#sub-confirm" ).click(function() {
		
		 if($( "#email" ).val() ==""){
			 alert("Email is required");
			 return;
		 }
		
		 if($( "#password" ).val() ==""){
			 alert("Password is required");
			 return;
		 }
		$.ajax({
			type: "POST", // phương thức gởi đi
			url: "controller/comfirmAccount.php", // nơi mà dữ liệu sẽ chuyển đến khi submit
			data: "email="+ $( "#email" ).val() +"&password="+ $( "#password" ).val(), // giá trị post
			success: function(answer){ 
				switch (answer){
					case '0':
						window.location.href = 'login.php';
						break;
					case '1':
						alert("your email is not found");
						break;
					case '2':
						alert("your password is not correct");
						break;
				}
			}
		});
    });
});