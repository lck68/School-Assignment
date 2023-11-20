<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<body>
<form action="" method="post">
	年:<input type="text" id="year" name="year" required><br>
	月:<input type="text" id="month" name="month" required><br>
	日:<input type="text" id="day" name="day" required><br>
	<input type="submit" value="计算">
</form>
<?php
if (isset($_POST['year']) && isset($_POST['month']) && isset($_POST['day'])) {
    $year = $_POST['year'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $days = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
        $days[1] = 29;
    }
    $sum = 0;
    for ($i = 0; $i < $month - 1; $i++) {
        $sum += $days[$i];
    }
    $sum += $day;
    echo "{$year}年{$month}月{$day}日,是{$year}年的第{$sum}天";
}
?>
</body>
</html>