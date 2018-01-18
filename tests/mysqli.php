<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "mysql");

$rs = mysqli_query($link, "SELECT NOW() t;");
$row = mysqli_fetch_assoc($rs);

print_r($row);
