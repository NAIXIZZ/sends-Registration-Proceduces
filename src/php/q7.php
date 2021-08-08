<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/question.css">
    <script type="text/javascript" src="../js/saveReport.js"></script>
</head>

<body>
    <div class="page">
        <div class="question">
            <p>7.如果给你布置了一个做新的App的设想，你会选择做什么？</p>
        </div>
        <form action="q7.php" method="post" onsubmit="return saveReport();">
            <input type="radio" name="q7" id="a" value="result.phpc"><label for="a">界面优化与布局</label><br />
            <input type="radio" name="q7" id="b" value="q8.php"><label for="b">需求分析和功能设计</label><br />
            <input type="reset" value="back" name="back" onclick="window.location.href='<?php echo 'q6.php'; ?>'" class="button button1">
            <input type="submit" value="next" name="next" class="button button2">
        </form>
        <?php
        session_start();
        $_SESSION['q7'] = $_POST['q7'];
        if (strpos($_POST['q7'], 'result.php') !== false) {
            $url = substr_replace($_POST['q7'], "", -1);
        } else {
            $url = $_POST['q7'];
        }
        Header("Location:$url");
        ?>
    </div>
</body>

</html>