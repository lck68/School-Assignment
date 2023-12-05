<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
header("content-type:text/html;charset=utf-8"); 
echo "<title>统计学生平均成绩</title>"; 
echo "<form method=post>";
for($i=1;$i<=5;$i++){
    echo "学生".$i."的成绩：<input type='text' name='stu[]'><br>";
}
echo "<input type='submit' name='bt' value='提交'>";
echo "</form>";
if(isset($_POST['bt'])){
    $sum=0;
    $stu=$_POST['stu'];
    $num=count($stu);
    echo"您输入的成绩有：<br>"; 
    foreach($stu as $score){
        echo $score."<br>";
        $sum=$sum+$score;
    }
    $average=$sum/$num;
    echo "<br>平均分为：$average";
}
?>
</body>
</html>