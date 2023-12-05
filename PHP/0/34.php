<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style>
    th,td,input {text-align:center; border:1px solid black; width:100px;}
    table {border-collapse:collapse; width:300px;}
</style>
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <th>学号</th>
            <th>姓名</th>
            <th>成绩</th>
        </tr>
        <?php
        for($i=0;$i<3;$i++){
            echo '<tr>';
            echo '<td><input type="text"name="txtsno[]"/></td>';
            echo '<td><input type="text"name="txtsname[]"/></td>';
            echo '<td><input type="text"name="txtscore[]"/></td>';
            echo'</tr>';
        }
        ?>
        <tr>
            <td colspan="3">
                <input type="submit" name="btnTj"value="提交"/>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
</body>
</html>

<?php
if(isset($_POST["btnTj"])){
    echo"你输入的成绩是：<br/>";
    $sno=$_POST["txtsno"];
    $sname=$_POST["txtsname"];
    $score=$_POST["txtscore"];
    echo'<table>';
    echo'<tr>';
    echo'<th>学号</th>';
    echo'<th>姓名</th>';
    echo'<th>成绩</th>';
    echo'</tr>';
    for($i=0;$i<count($sno);$i++){
        echo '<tr>';
        echo '<td>'.$sno[$i].'</td>';
        echo '<td>'.$sname[$i].'</td>';
        echo '<td>'.$score[$i].'</td>';
        echo '</tr>';
    }
    echo '</table><br/>排序以后的成绩：';
    array_multisort($score,SORT_DESC,$sno,$sname);
    echo '<table>';
    echo'<tr>';
    echo'<th>学号</th>';
    echo'<th>姓名</th>';
    echo'<th>成绩</th>';
    echo'</tr>';
    for($i=0;$i<count($sno);$i++){
    echo '<tr>';
    echo '<td>'.$sno[$i].'</td>';
    echo '<td>'.$sname[$i].'</td>';
    echo '<td>'.$score[$i].'</td>';
    echo '</tr>';
    }
    echo '</table><br/>';
}