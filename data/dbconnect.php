<?php
include_once 'config.php';
//connect with Database
$db_conn = New mysqli("localhost","root","","charity");
//Display error if failed to connect
if ($db_conn->connect_errno) {
    printf("connect failed: %s\n", $db_conn->connect_error);
    exit();
}