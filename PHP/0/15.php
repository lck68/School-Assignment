<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
    <?php
    date_default_timezone_set("Asia/Shanghai");
    $d=date("D");
    switch ($d) {
        case "Mon":echo "今天星期一<br/>";break;
        case "Tue":echo "今天星期二<br/>";break;
        case "Wed":echo "今天星期三<br/>";break;
        case "Thu":echo "今天星期四<br/>";break;
        case "Fir":echo "今天星期五<br/>";break;
        case "Sat":echo "今天星期六<br/>";break;
        default:echo "今天星期日<br/>";break;
    }
    ?>
</body>
</html>