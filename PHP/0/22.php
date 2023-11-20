<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
 <form action="" method="post">
    输入一个数<input name="txt_1" type="text" /><br>
    <input name="bj" type="submit" value="提交" />
    </form>
<?php
 if(isset($_POST['bj'])){
 $n=$_POST['txt_1'];
   $b=false;
 for($i=2;$i<=sqrt($n);$i++){
  if($n%$i==0){
   $b=true;
   break;
  }
 }if($b)
  echo $n."是合数";
  else
  echo $n."是质数";
 
 }
 ?>
<body>
</body>
</html>