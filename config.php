<?php
ob_start();

try {

	$con = new PDO("mysql:dbname=doodle;host=localhost", "rickjoseph23", "1234567");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOExeption $e) {
	echo "Connection failed: " . $e->getMessage();
}
?>