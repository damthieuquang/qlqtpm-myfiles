<?php
	include_once('../phpmailer/class.phpmailer.php');
	class MailHandler
	{
		public static function Send($email, $subject, $boby)
		{
			$mail = new PHPMailer();
	
			/*=====================================
			* THIET LAP THONG TIN GUI MAIL
			*=====================================*/
			$mail->IsSMTP(); // Gọi đến class xử lý SMTP
			$mail->SMTPDebug = 2; // enables SMTP debug information (for testing)
			// 1 = errors and messages
			// 2 = messages only
			$mail->SMTPAuth = true; // Sử dụng đăng nhập vào account
			$mail->SMTPSecure = "ssl";
			$mail->Host = "smtp.gmail.com"; // Thiết lập thông tin của SMPT
			$mail->Port = 465; // Thiết lập cổng gửi email của máy
			$mail->Username = "tranquanghau991@gmail.com"; // SMTP account username
			$mail->Password = "quanghau123456"; // SMTP account password
			
			//Thiet lap thong tin nguoi gui va email nguoi gui
			$mail->SetFrom('tranquanghau991@gmail.com','MyFiles');
			
			//Thiết lập thông tin người nhận
			$mail->AddAddress($email);
			
			
			//Thiết lập email nhận email hồi đáp
			//nếu người nhận nhấn nút Reply
			$mail->AddReplyTo("tranquanghau991@gmail.com","MyFiles");
			
			  /*=====================================
			* THIET LAP NOI DUNG EMAIL
			*=====================================*/
			$mail->IsHTML(true);
			//Thiết lập tiêu đề
			$mail->Subject = $subject;
			
			//Thiết lập định dạng font chữ
			$mail->CharSet = "utf-8";
			
			//Thiết lập nội dung chính của email
			$mail->Body = $boby;
			
			$mail->Send();
		}
	}
?>