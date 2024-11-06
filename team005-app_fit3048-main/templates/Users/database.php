<?php
$db_host='localhost';
$db_name='cake';
$db_user='cake';
$db_pass='cake';

$conn=new mysqli($db_host, $db_user, $db_pass, $db_name);

if($conn ->connect_error){
    printf("Connection failed: $s\n", $conn->connect_error);
    exit();
}
?>
