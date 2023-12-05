<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>注销</title>
</head>
<body>
<?php
    $username=$_COOKIE['username'];
    setcookie("username","",time()-1);
    echo "$username,欢迎下次光临！";
    echo "<a href='31a.html'>重新登陆</a>";
?>
</body>
</html>