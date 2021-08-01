<?php
    header('Content-type:text/html; charset=utf-8');
    session_start();
    $link = mysqli_connect('localhost', 'root', '123456', 'stu');
    mysqli_set_charset($link, 'utf8');
    //通过表单获取用户名和密码，连接数据库后用mysqli_query查询userinfo
    $result = mysqli_query($link, 'SELECT * FROM `userinfo`');
    $flag = true;
    while ($row = mysqli_fetch_assoc($result)) {
        $username = $row['u_name'];
        $password = $row['u_password'];

        if (isset($_POST['login'])) {
            if (($_POST['username'] == '') || ($_POST['password'] == '')) {
                // 若有一项为空,视为未填写,提示输入
                header('url=signin.php');
                echo "<div class = \"info\">请输入...</div>";
                exit;
            } elseif (($_POST['username'] != $username) || ($_POST['password'] != $password)) {
                // 用户名或密码错误
                header('url=signin.php');
                // echo "<div class = \"info\">用户名或密码错误,请重新填写登录信息!</div>";
                $flag = false;
                continue;
            } elseif (($_POST['username'] = $username) && ($_POST['password'] = $password)) {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['password'] = $_POST['password'];
                $_SESSION['usertype'] = $row['u_type'];
                //用session保存登录信息，以防后面用到
                if ($_SESSION['usertype'] == "A") {
                    header('location:admin.php');
                } elseif ($_SESSION['usertype'] == "T") {
                    header('location:teacher.php');
                } elseif ($_SESSION['usertype'] == "S") {
                    header('location:student.php');
                }
            }
        }
    }
    if ($flag == false) {
        echo "<div class = \"info\">用户名或密码错误,请重新填写登录信息!</div>";
    }
    ?>