<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>求正方形的面积和周长</title>
</head>

<body>
	<form action="" method="post">
        请输入长方形长：<input name="txt_canshua" type="text" /><br>
        请输入长方形宽：<input name="txt_canshub" type="text" /><br>
<input name="btn_jisuan" type="submit" value="计算" />
</form>
 <?php
 if(isset($_POST["btn_jisuan"]))
 {
   $canshua=$_POST["txt_canshua"]; 
   $canshub=$_POST["txt_canshub"]; 
 
 $canshuc=$canshua*$canshub;
 $canshus=2*($canshua+$canshub);
 echo "长方形面积为:".$canshuc."<br>长方形周长为:".$canshus;
 }
 ?>
</body>
</html>
