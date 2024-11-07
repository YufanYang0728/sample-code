<?php
$db_host='localhost';
$db_name='u22s2104_advice';
$db_user='u22s2104_cakephp';
$db_pass='26042001qQ';

$conn=new mysqli($db_host, $db_user, $db_pass, $db_name);

if($conn ->connect_error){
    printf("Connection failed: $s\n", $conn->connect_error);
    exit();
}
?>
