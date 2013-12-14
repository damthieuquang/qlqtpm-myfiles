<?php
session_start();
if (isset($_SESSION['myemail'])) {
	unset($_SESSION['myemail']); // Hủy sessionk
}
// trở về trang chủ
header('Location: ../index.php');
?>