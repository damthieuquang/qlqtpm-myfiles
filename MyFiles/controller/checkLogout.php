<?php
session_start();
if (isset($_SESSION['myemail'])) {
	unset($_SESSION['myemail']); // Hủy sessionk
}

if (isset($_SESSION['admin'])) {
	unset($_SESSION['admin']); // Hủy sessionk
}
// trở về trang chủ
header('Location: ../index.php');
?>