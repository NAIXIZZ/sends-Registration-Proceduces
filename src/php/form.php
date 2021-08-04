<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/base.css">
</head>

<body>
    <style>
        body {
            background-color: #f5f5f5;
        }

        .page {
            min-width: 320px;
            max-width: 450px;
            height: 667px;
            border: 1px #000 solid;
            margin: 0 auto;
            text-align: center;
        }

        p {
            font-size: 17px;
            margin-top: 60%;
            margin-bottom: 5%;
            color: #6e6e6e;
        }

        a {
            font-size: 18px;
            color: #000;
        }
    </style>
    <div class="page">
        <?php
        // 连接数据库、设置字符集
        $link = @mysqli_connect('localhost', 'root', '123456', 'information')
            or die("无法连接到服务器");
        mysqli_set_charset($link, 'utf8');
        // 获取查询结果集
        if ($_POST['name'] != '' and $_POST['id'] != '' and $_POST['phone'] != '' and $_POST['qq'] != '' and $_POST['campus'] != 0 and $_POST['academy'] != '' and $_POST['profession'] != '' and $_POST['firstVolunteer'] != 0 and $_POST['secondVolunteer'] != 0) {
            $name = $_POST['name'];
            $id = $_POST['id'];
            $phone = $_POST['phone'];
            $qq = $_POST['qq'];
            $campus = $_POST['campus'];
            $academy = $_POST['academy'];
            $profession = $_POST['profession'];
            $first = $_POST['firstVolunteer'];
            $second = $_POST['secondVolunteer'];
            $sq_add = "INSERT INTO information(s_name,id,phone,qq,campus,academy,profession,firstVolunteer,secondVolunteer)
        VALUES('$name','$id','$phone','$qq','$campus','$academy','$profession','$first','$second')";
            mysqli_query($link, $sq_add);
            $error = mysqli_error($link);
            if (strpos($error, 'Duplicate') !== false) {
                echo "<p>您已经报过名了</P><a href=\"../html/entryForm.html\">去抽奖</a>";
            } else {
                echo "<p>报名成功</p><a href=\"../html/entryForm.html\">去抽奖</a>";
            }
            mysqli_close($link);
        } else {
            echo "<p>您有部分信息未填写，请填写完整后再次提交</p><a href=\"../html/entryForm.html\" onclick=\"fill()\">返回提交</a>";
        }
        ?>
    </div>
</body>

</html>