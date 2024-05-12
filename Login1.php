<?php

$DB_SERVER+"localhost";
$DB
$DB
$DB

&connection = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
if(!connection) {
	echo "Error: unable to connect to server";
	echo "debugging error:"/mysqli_connect_error().php_EOL;
	exit;
}

if (!isset($_POST['username'], $_PST['password']) ) {
	exit('please fill username and password fields);
}
