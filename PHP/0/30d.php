<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>注销</title>
</head>
<body>
<?php
    session_start();
    $username=$_SESSION['username'];
    $_SESSION=array();
    session_destroy();
    echo "$username,欢迎下次光临！";
    echo "<a href='30a.html'>重新登陆</a>";
?>
</body>
</html>