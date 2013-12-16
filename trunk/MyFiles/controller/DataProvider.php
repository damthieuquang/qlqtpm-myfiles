<?php
class DataProvider
{
	public static function ExecuteQuery($sql)
	{
		$ini_array = parse_ini_file("../config.ini");
		$connection = mysql_connect($ini_array["host"],$ini_array["username"],$ini_array["password"]) or die ("couldn't connect to localhost");
		mysql_select_db($ini_array["database"],$connection);
		mysql_query("SET NAMES 'UTF8'");
		$result = mysql_query($sql,$connection);
		mysql_close($connection);
		return $result;
	}
}
?>