<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>桑梓纳新报名页面</title>
    <link rel="stylesheet" href="../css/question.css">
    <script type="text/javascript" src="../js/saveReport.js"></script>
</head>

<body>
    <div class="page">
        <div class="question">
            <p class="q">Q</p>
            <p class="ques">你是否具有探索互联网的热情？</p>
        </div>
        <form name="anser" action="q1.php" method="post" onsubmit="return saveReport();">
            <div class="choose">
                <button type="radio" name="q1" id="a" value="q2.php" onclick="save()"><label for="a">是。</label><br />
                </button>
                <button type="radio" name="q1" id="b" value="result.phpf" onclick="save()"><label for="b">否。</label><br />
                </button>
            </div>
            <!-- <input type="radio" name="q1" id="a" value="q2.php" onclick="save()"><label for="a">是</label><br />
            <input type="radio" name="q1" id="b" value="result.phpf" onclick="save()"><label for="b">否</label><br /> -->
            <div class="operBar">
                <input type="reset" value="Back" name="back" onclick="window.location.href='enterPageControl.php'"
                class="oper">
            <input type="submit" value="Next" name="next" class="oper">
            </div>
        </form>
        <?php
        session_start();
        $_SESSION['q1'] = $_POST['q1'];
        if (strpos($_POST['q1'], 'result.php') !== false) {
            $url = substr_replace($_POST['q1'], "", -1);
        } else {
            $url = $_POST['q1'];
        }
        Header("Location:$url");
        ?>
        <script language="javascript" type="text/javascript">
            function save() {
                var radios = document.getElementsByName("q1");
                for (var i = 0; i < radios.length; i++) {
                    if (radios[i].checked) {
                        document.cookie = 'q1index=' + i;
                    }
                }
            }

            window.onload = function () {
                var cookies = document.cookie;
                if (cookies != "") {
                    cookies = "{\"" + cookies + "\"}";
                    cookies = cookies.replace(/\s*/g, "").replace(/=/g, '":"').replace(/;/g, '","');
                    var json = eval("(" + cookies + ")"); //将coolies转成json对象
                    document.getElementsByName("q1")[json.q1index].checked = true;
                } else {
                    save();
                }
            }
        </script>
</body>

</html>