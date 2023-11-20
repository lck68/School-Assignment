<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>输出学生信息</title>
</head>

<body>
<table width="500" border="1" align="right">
<?php
    echo "<tr><td>"."学号"."</td><td>"."姓名"."</td><td>"."年龄"."</td><td>"."性别"."</td><td>"."期末成绩"."</td><td>"."是否三好学生"."</td></tr>";
    $xuehao="1001";$xingming="梅长苏";$nianling=35;
    $xingbie="M";$chengji=99.5;$sanhao="是";
    echo "<tr><td>".$xuehao."</td><td>".$xingming."</td><td>".$nianling."</td><td>".$xingbie."</td><td>".$chengji."</td><td>".$sanhao."</td></tr>";
    $xuehao="1002";$xingming="蔺晨";$nianling=36;
    $xingbie="M";$chengji=98.5;$sanhao="否";
    echo"<tr><td>".$xuehao."</td><td>".$xingming."</td><td>".$nianling."</td><td>".$xingbie."</td><td>".$chengji."</td><td>".$sanhao."</td></tr>";
    $xueha0="1003";$xingming="萧平旌";$nianling=18;
    $xingbie="M";$chengji=99.5;$sanhao="是";
    echo"<tr><td>".$xuehao."</td><td>".$xingming."</td><td>".$nianling."</td><td>".$xingbie."</td><td>".$chengji."</td><td>".$sanhao."</td></tr>";
    $xuehao="1004";$xingming="林夕";$nianling=18;
    $xingbie="F";$chengji=96.5;$sanhao="否";
    echo "<tr><td>".$xuehao."</td><td>".$xingming."</td><td>".$nianling."</td><td>".$xingbie."</td><td>".$chengji."</td><td>".$sanhao."</td></tr>";
?>
</table>
</body>
</html>