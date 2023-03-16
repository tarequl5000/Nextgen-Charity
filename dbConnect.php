<?php 
// Include configuration file 
include_once 'config.php';
include_once '1.php';
// Connect with the database 
$db = new mysqli("localhost", "root", "", "charity"); 
 
// Display error if failed to connect 
if ($db->connect_errno) { 
    printf("Connect failed: %s\n", $db->connect_error); 
    exit(); 
}