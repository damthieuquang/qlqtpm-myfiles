<?php
	include_once("DataProvider.php");
	$id = $_REQUEST['id'];
	$newPass = $_REQUEST['newPass'];
	$reNewPass = $_REQUEST['reNewPass'];
	if ( $newPass != $reNewPass )
	{
		echo '<p class="success">Passwords do not match!</p>';
		echo '<p class="success"><button id="OKchange" style="width:80px; height:30px;">Try it</button></p>';
		exit;
	}
	else
	{
		$password = md5($newPass);
		$query = "update `account` set `password` = '$password' where `account_id` = $id";
		DataProvider::ExecuteQuery($query);
		
		?>
            <p ><img src="images/register-success.png"><br>
            Successfully!<br>
            </p>
            <p ><button id="frm-btnLogin" style="width:80px; height:30px;">OK</button></p>
     	<?php
	}

?>