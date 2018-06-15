<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2018-06-15 13:44:56
 * @version $Id$
 */

$dbServer = "127.0.0.1";
$dbUser = "root";
$dbPass = "";
$dbName = "user";


$conn = @mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

if (mysqli_connect_errno($conn))
	die("无法连接数据库服务器");


mysqli_set_charset($conn, "utf8");

?>
