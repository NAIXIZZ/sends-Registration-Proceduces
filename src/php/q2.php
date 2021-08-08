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
            <p>2.你认为自己最（将）具备哪一项计算机技能？</p>
        </div>
        <form action="q2.php" method="post" onsubmit="return saveReport();">
            <input type="radio" name="q2" id="a" value="q3.php"><label for="a">敲代码</label><br />
            <input type="radio" name="q2" id="b" value="q6.php"><label for="b">Ps、Pr</label><br />
            <input type="radio" name="q2" id="c" value="q8.php"><label for="c">功能设计</label><br />
            <input type="radio" name="q2" id="d" value="q10.php"><label for="d">文案</label><br />
            <input type="reset" value="back" name="back" onclick="window.location.href='<?php echo 'q1.php' ?>'" class="button button1">
            <input type="submit" value="next" name="next" class="button button2">
        </form>
        <?php
        session_start();
        $_SESSION['q2'] = $_POST['q2'];
        if (strpos($_POST['q2'], 'result.php') !== false) {
            $url = substr_replace($_POST['q2'], "", -1);
        } else {
            $url = $_POST['q2'];
            echo $url;
        }
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