<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>主页</title>
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION['username'])){
        echo $_SESSION['username'].",你好，欢迎访问本网站！<br/>";
        echo '<a href="30d.php">注销</a>';
    }else{
        header("location:30a.html");
    }
?>
</body>
</html>