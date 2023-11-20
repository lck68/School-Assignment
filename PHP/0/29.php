<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<body>
    <form action="30.php" type="text" method="POST">
        <fieldset>
            <legend>个人信息表</legend>
        请输入你的姓名：<input type="text" name="txtname"><br>
        密码：<input type="password" name="txtpsd"><br>
        性别：<input type="radio" name="sex" value="男">男
              <input type="radio" name="sex" value="女">女<br>
        爱好：<input type="checkbox" name="hobby[]" value="吃饭">吃饭
              <input type="checkbox" name="hobby[]" value="睡觉">睡觉
              <input type="checkbox" name="hobby[]" value="刷抖音">刷抖音<br>
        照片：<input type="file" name="file1"><br>
        专业：<select name="zhuanye" id="">
                <option value="大数据">大数据</option>
                <option value="软件">软件</option>
                <option value="人工智能">人工智能</option>
              </select><br>
        课程：<select name="kc[]" id="" multiple>
                <option value="PHP">PHP</option>
                <option value="Java" selected>Java</option>
                <option value="Python">Python</option>
              </select>(ctrl多选)<br>
        <input type="submit" name="tj">
    </form>
<?php
?>
</body>
</html>