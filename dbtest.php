<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$connection = new mysqli($dbhost, 'root', '1234', 'attendancemgmtsystem');
if ($connection->connect_errno) {
	printf("Connect failed:, $dbhost");
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
