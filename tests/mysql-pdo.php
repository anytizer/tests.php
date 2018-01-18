<?php
$pdo = new PDO("mysql:host=localhost;dbname=mysql", "root", "");

$statement = $pdo->prepare("SELECT NOW() t;");
$params = array(
);
$statement->execute($params);

$result = $statement->fetch(PDO::FETCH_ASSOC);
print_r($result);
