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
            <p>5.你是否想做小程序或网站的开发？</p>
        </div>
        <form action="q5.php" method="post" onsubmit="return saveReport();">
            <input type="radio" name="q5" id="a" value="result.phpb"><label for="a">是</label><br />
            <input type="radio" name="q5" id="b" value="q6.php"><label for="b">否，但会有界面设计的能力</label><br />
            <input type="radio" name="q5" id="d" value="q8.php"><label for="d">否，但会有对其具体功能的创意想法</label><br />
            <input type="reset" value="back" name="back" onclick="window.location.href='<?php echo 'q4.php'; ?>'" class="button button1">
            <input type="submit" value="next" name="next" class="button button2">
        </form>
        <?php
        session_start();
        $_SESSION['q5'] = $_POST['q5'];
        if (strpos($_POST['q5'], 'result.php') !== false) {
            $url = substr_replace($_POST['q5'], "", -1);
        } else {
            $url = $_POST['q5'];
        }
        Header("Location:$url");
        ?>
    </div>
</body>

</html>