<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<body>
<?php
    $name=$_POST["txtname"];
    $sex=$_POST["sex"];

    $hobby=$_POST["hobby"];
    $like="";
    for($i=0;$i<count($hobby);$i++)
        $like=$like.$hobby[$i]."&nbsp;";

    $zy=$_POST["zhuanye"];

    $kc=$_POST["kc"];
    $kcstr="";
    for($j=0;$j<count($kc);$j++)
        $kcstr=$kcstr.$kc[$j]."&nbsp;";

    echo "{$name}，真你妈的好啊！你是{$sex}的。你喜欢{$like}。你是学{$zy}的。你需要上{$kcstr}课。";
?>
</body>
</html>