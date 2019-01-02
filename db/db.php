<?php
	$db = mysqli_connect("127.0.0.1","root","","sms");
if (mysqli_connect_errno()) {
	echo "Database Query Faield: ".mysqli_connect_error();
	exit();
}
?>