<?php
require_once("inc.config.php");

$pdo = null;
try
{
	$pdo = new PDO(sprintf("mysql:host=%s;dbname=%s;charset=utf8mb4;", $configs["hostname"], $configs["database"]), $configs["username"], $configs["password"]);
}
catch(Exception $ex)
{
	echo $ex;
	die("PDO Connection error.");
}

$statement = $pdo->prepare("SELECT NOW() t;");
$params = array(
);
$statement->execute($params);

$result = $statement->fetch(PDO::FETCH_ASSOC);
echo "PDO Database time: ", $result["t"];
