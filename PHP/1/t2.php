<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>从键盘上得到两个数，并交换两个数的值</title>
</head>
 
<body>
	<form action="" method="post">
	请输入参数1：<input name="txt_canshu1" type="text" /><br>
	请输入参数2：<input name="txt_canshu2" type="text" /><br>
	<input name="btn_jisuan" type="submit" value="计算" />
	</form>
	<?php
	if(isset($_POST["btn_jisuan"]))	
	{
	$canshu1=$_POST["txt_canshu1"];	
	$canshu2=$_POST["txt_canshu2"];	
		$a=$canshu1;  // 交换变量
		$canshu1=$canshu2;
		$canshu2=$a;
		echo "交换后数值1为".$canshu1."<br>交换后数值2为".$canshu2;
	}
	?>
</body>
</html>