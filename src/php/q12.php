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
            <p>12.如果有一个线上项目需要团队完成，你愿意做下面的哪一个任务？</p>
        </div>
        <form action="q1.php" method="post" onsubmit="return saveReport();">
            <input type="radio" name="q1" id="a"><label for="a">前期策划</label><br />
            <input type="radio" name="q1" id="b"><label for="b">软件开发</label><br />
            <input type="radio" name="q1" id="c"><label for="c">界面设计</label><br />
            <input type="radio" name="q1" id="d"><label for="d">后台技术</label><br />
            <input type="radio" name="q1" id="e"><label for="e">宣传推广</label><br />
            <input type="reset" value="back" name="back" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER']; ?>'" class="button button1">
            <input type="submit" value="next" name="next" class="button button2">
        </form>
        <?php
        session_start();
        $url = "result.php";
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