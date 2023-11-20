<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>输入三位数，比如123，输出321</title>
</head>
 
<body>
 <form action="" method="post">
 请输入参数1：<input name="txt_canshu1" type="text" /><br>

 <input name="btn_jisuan" type="submit" value="计算" />
 </form>
 <?php
 if(isset($_POST["btn_jisuan"])) 
 {
  $num=$_POST["txt_canshu1"];
  $ge=$num%10;
  $bai=(int)($num/100);
  $shi=(int)($num%100/10);
  $a=$ge;
  $ge=$bai;
  $bai=$a;
  echo "交换后数值为".$bai.$shi.$ge;
 }
 ?>
</body>
</html>