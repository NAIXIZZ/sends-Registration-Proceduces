<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/question.css">
</head>

<body>
    <div class="page">
        <div class="question">
            <p>7.如果给你布置了一个做新的App的设想，你会选择做什么？</p>
        </div>
        <form action="q1.php" method="post" onsubmit="return saveReport();">
            <input type="radio" name="q1" id="a" value="result.php"><label for="a">界面优化与布局</label><br />
            <input type="radio" name="q1" id="b" value="q8.php"><label for="b">需求分析和功能设计</label><br />
            <input type="reset" value="back" name="back" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER']; ?>'" class="button button1">
            <input type="submit" value="next" name="next" class="button button2">
        </form>
        <?php
        session_start();
        $_SESSION['url'] = $_POST['q1'];
        $url = $_SESSION['url'];
        Header("Location:$url");
        ?>
    </div>
    <script>
        function saveReport() {
            // jquery 表单提交
            $("#showDataForm").ajaxSubmit(function(message) {
                // 对于表单提交成功后处理，message为提交页面saveReport.htm的返回内容
            });

            return false; // 必须返回false，否则表单会自己再做一次提交操作，并且页面跳转
        }
    </script>
</body>

</html>