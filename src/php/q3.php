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
            <p>3.你是否已经具有一定的编程基础？</p>
        </div>
        <form action="q3.php" method="post" onsubmit="return saveReport();">
            <input type="radio" name="q3" id="a" value="q4.php"><label for="a">是</label><br />
            <input type="radio" name="q3" id="b" value="q11.php"><label for="b">否</label><br />
            <input type="reset" value="back" name="back" onclick="window.location.href='<?php echo 'q2.php'; ?>'" class="button button1">
            <input type="submit" value="next" name="next" class="button button2">
        </form>
        <?php
        session_start();
        $_SESSION['q3'] = $_POST['q3'];
        if (strpos($_POST['q3'], 'result.php') !== false) {
            $url = substr_replace($_POST['q3'], "", -1);
        } else {
            $url = $_POST['q3'];
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