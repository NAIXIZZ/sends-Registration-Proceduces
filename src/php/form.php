<?php
// 连接数据库、设置字符集
$link = @mysqli_connect('localhost', 'root', '123456', 'information')
    or die("无法连接到服务器");
mysqli_set_charset($link, 'utf8');
// 获取查询结果集
if (!$_POST['name'] == '' ) {
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
    if (!mysqli_query($link, $sq_add)) {
        echo "<h1>提交失败</h>";
    } else {
        echo "<h1>报名成功</h>";
    }
    mysqli_close($link);
} else {
    echo "<p class=\"tips\">请输入要添加的内容(添加内容不可为空)</p>";
}
