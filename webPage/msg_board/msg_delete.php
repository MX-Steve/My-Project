<?php
//1:获取参数
$id = $_REQUEST['mid'];
//2:连接数据库
$conn = mysqli_connect('127.0.0.1','root','',
'msg');
$sql = "SET NAMES utf8";
mysqli_query($conn,$sql);
//3:创建sql
$sql = "DELETE FROM t_msg WHERE mid = $id";
//4:执行sql
$result = mysqli_query($conn,$sql);
//5:返回结果 true/false
if($result===true){
	echo "删除成功";
	echo "<a href='msg_select.php'>浏览留言</a>";
	echo "<a href='msg_add.html'>添加留言</a>";
}else{
	echo "删除失败";
	echo "<a href='msg_select.php'>浏览留言</a>";
	echo "<a href='msg_add.html'>添加留言</a>";
}