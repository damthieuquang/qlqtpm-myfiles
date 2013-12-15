<?php
class DataProvider
{
	public static function ExecuteQuery($sql)
	{
		$connection = mysql_connect("localhost","root","123456") or die ("couldn't connect to localhost");
		mysql_select_db("myfiles",$connection);
		mysql_query("SET NAMES 'UTF8'");
		$result = mysql_query($sql,$connection);
		mysql_close($connection);
		return $result;
	}
}
?>