<?php
require_once("inc.config.php");

$link = null;
try
{
	$link = mysqli_connect($configs["hostname"], $configs["username"], $configs["password"]);
}
catch(Exception $ex)
{
	echo $ex;
	die("Database Connection error.");
}
if(!$link)
{
	throw new Exception("Error connecting to the database.");
}

mysqli_select_db($link, $configs["database"]);

$result_set = mysqli_query($link, "SELECT NOW() t;");
$result = mysqli_fetch_assoc($result_set);
echo "MySQLi time: ", $result["t"];
