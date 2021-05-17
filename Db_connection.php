<?php
class database_connection
{
$db_host='localhost';
$db_user='root';
$db_password="";
$db_name='agriculture';
function connect_db()
{
		global $db_host, $db_user,$db_password, $db_name;
		$link=mysql_pconnect($bd_host,$db_user,"");
		if(!$link)
		{
		die('Not Connected :' . mysql_error());
		}
		$db_selected=mysql_select_db($db_name,$link);
		if(!$db_selected)
		{
		die('Error : ' . mysql_error());
		}
		return $link;
}
}


?>