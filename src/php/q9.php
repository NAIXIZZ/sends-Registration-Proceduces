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
            <p>9.在不看手机的情况下你是否能对最经常使用的一个App的界面和功能做出描述？</p>
        </div>
        <form action="q9.php" method="post" onsubmit="return saveReport();">
            <input type="radio" name="q9" id="a" value="result.phpa"><label for="a">是</label><br />
            <input type="radio" name="q9" id="b" value="q10.php"><label for="b">否</label><br />
            <input type="reset" value="back" name="back" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER']; ?>'" class="button button1">
            <input type="submit" value="next" name="next" class="button button2">
        </form>
        <?php
        session_start();
        $_SESSION['q9'] = $_POST['q9'];
        if (strpos($_POST['q9'], 'result.php') !== false) {
            $url = substr_replace($_POST['q9'], "", -1);
        } else {
            $url = $_POST['q9'];
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