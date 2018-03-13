<?php
$xdebug_disable = "xdebug_disable";
if(function_exists($xdebug_disable))
{
	$xdebug_disable();
}

$configs = array(
	"hostname" => "localhost",
	"username" => "root",
	"password" => "",
	"database" => "mysql",
);
