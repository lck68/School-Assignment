<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>计算器</title>
</head>

<body>
	<form method=post>
		<table>
		<tr>
			<td>
			<input type="text"size="4"name="number1">
				<select name="caculate">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
				</select>
				<input type="text"size="4"name="number2">
				<input type="submit"name="ok"value="计算">
			</td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
if(isset($_POST['ok']))
{
$number1=$_POST['number1'];
$number2=$_POST['number2'];
$caculate=$_POST['caculate'];
if($caculate=="+")
  $answer=$number1+$number2;
   if($caculate=="-")
  $answer=$number1-$number2;
	  if($caculate=="*")
  $answer=$number1*$number2;
		 if($caculate=="/")
  $answer=$number1/$number2;
 echo "<script>alert('".$number1.$caculate.$number2."=".$answer."')</script>";
}
   ?>
