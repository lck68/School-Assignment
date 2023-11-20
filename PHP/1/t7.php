<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>输入一个五位数，判断它是不是回文数</title>
</head>
 
<body>
	<form action="" method="post">
	请输入五位数：<input name="txt_canshu1" type="text" /><br>
	<input name="btn_jisuan" type="submit" value="计算" />
	</form>
	<?php
	if(isset($_POST["btn_jisuan"]))
	{
	  $a=$_POST["txt_canshu1"];
	  $ge=$a%10;
	  $wan=(int)($a/10000);
	  $qian=(int)($a%10000/1000);
	  $shi=(int)($a/10)%10;
	  if($wan==$ge && $qian==$shi)
	  {
			echo $a."是回文数";
	  }
	  else
	  {
			echo $a."不是回文数";
	  }
	}
	?>
</body>
</html>