<html>
<head>
<meta charset="utf-8">
<title>PHP调用JavaScript</title>
</head>
<body>
<?php
    $now=date("Y-m-d H:i:s");
    $name="张晓晓";
    $message="单击按钮显示程序员姓名";
    echo "<script>";
    echo "alert('".$name."登录成功！现在时间是".$now."');";
    echo "</script>";
?>
<h3>--登录的程序员是--</h3>
<form name="form1">
    <input type="text" name="text1" size=20 value="<?php echo $message?>"><br>
    <input type="button" name="button1" value="点击" onclick="text1.value='<?php echo $name; ?>'">
</form>
</body>
</html>