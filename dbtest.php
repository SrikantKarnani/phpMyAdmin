<?php
$connection = new mysqli('localhost', 'sri', '1234', 'attendancemgmtsystem');
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
