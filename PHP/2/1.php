<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<body>
<form  action="" method="post">
      请输入三边：<br><input name = 'number1' type = 'text'/><br>
      <input name = 'number2' type ='text'/><br>
      <input name = 'number3' type ='text'/><br>
      <input name = 'tijiao' type = 'submit' value ='提交'/>
      </form>
<?php
    if(isset($_POST['tijiao']))
{
	 $n1 = $_POST['number1'];
	 $n2 = $_POST['number2'];
	 $n3 = $_POST['number3'];
	 if($n1+$n2>$n3 and $n2+$n3>$n1 and $n1+$n3>$n2)
	   	echo "{$n1}、{$n2}、{$n3}三边能构成三角形";
	 else
	    echo "{$n1}、{$n2}、{$n3}三边不能构成三角形";
}
?>
</body>
</html>
