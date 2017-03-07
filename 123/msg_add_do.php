<?php
//1:获取用户参数
$uname = $_REQUEST['uname'];
$email = $_REQUEST['email'];
$content = $_REQUEST['content'];
//2:将数据保存数据库中
//a:连接数据库
$conn = mysqli_connect('127.0.0.1','root','',
'msg');
$sql = "SET NAMES utf8";
mysqli_query($conn,$sql);
//b:创建sql
$sql = "INSERT INTO t_msg VALUES(null,'$uname','$email','$content',now())";
//c:发送sql
$result = mysqli_query($conn,$sql);
//d:判断
if($result===true){
 echo "发布留言成功 <a href='msg_select.php'>浏览全部留言</a>";
}else{
 echo "发布留言失败";
}

