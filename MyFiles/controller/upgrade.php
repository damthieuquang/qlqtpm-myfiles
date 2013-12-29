<?php
	include_once("DataProvider.php");
	$id = $_REQUEST['id'];
	$type = $_REQUEST['type'];
	
	$query = "update `account` set `accounttype_id` = $type where `account_id` = $id"; 
	$res = DataProvider::ExecuteQuery($query);
?>