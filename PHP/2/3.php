<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<body>
 <form action="" method="post">
  输入数字1<input name="m" type="text"/><br>
  输入数字2<input name="n" type="text"/><br>
  <input name="submit" type="submit" value="计算"/><br>
  </form>
<?php
 if(isset($_POST["submit"])){
    $m =$_POST["m"];
    $n =$_POST["n"];
    $k =$m*$n;
    if($m<$n){
      $t=$m;$m=$n;$n=$t;
    }
    while($m%$n!=0){
      $t=$m%$n;
      $m=$n;
      $n=$t;
    }
    $b=$k/$n;
    echo "最大公约数为{$n}，最小公倍数为{$b}";
 }
?>
</body>
</html>
