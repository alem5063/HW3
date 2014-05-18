<?php
//DB Connection information
$dbname="phpdb_";
$dbuser="selam";
$dbpwd="selam123";
$host="50.62.209.83";

	$conn= mysql_connect($host,$dbuser,$dbpwd);
	$db = mysql_select_db($dbname,$conn);
?>