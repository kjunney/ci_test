<?php
$mysql_hostname = "localhost";
$mysql_user = "springtest";
$mysql_password = "springtest";
$mysql_database = "springtest";
 
//$db = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or message(mysql_error());

$mysqli = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);

if ($mysqli->connect_errno) {
	message($mysqli->connect_error);
}
// mysql_select_db($mysql_database, $db) or message(mysql_error());

function message($message)
{
	echo "
	<script>
	window.alert (\"$message\");
	history.go(-1);
	</script>
	";
	exit;
}

?>