<?php 

$db_host = getenv('MYSQL_SERVICE_HOST');
$db_user = getenv('MYSQL_USERNAME');
$db_pass = getenv('MYSQL_PASSWORD');
$db_name = getenv('MYSQL_DATABASE');

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);



?>
