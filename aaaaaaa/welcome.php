<?php
 
include('lock.php');
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome </title>
</head>
 
<body>
<h1>로그인을 환영합니다. <?php echo $login_session; ?></h1> 
<h2><a href="logout.php">Sign Out</a></h2>
</body>
 
</html>