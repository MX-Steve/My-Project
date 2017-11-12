<?php
//1:连接数据库
$conn = mysqli_connect('127.0.0.1','root','','msg');
$sql = "SET NAMES utf8";
mysqli_query($conn,$sql);
//2:创建sql
$sql = "SELECT * FROM t_msg";
//3:发送sql
$result = mysqli_query($conn,$sql);
//4:获取查询结果集对象  抓取一行一行
echo "<table border=1>";
while(true){
 $row = mysqli_fetch_assoc($result);
 if($row === null){
	   break;
 }
 echo "<tr>";
 echo "<td>$row[mid]</td>";
 echo "<td>$row[uname]</td>";
 echo "<td>$row[email]</td>";
 echo "<td>$row[content]</td>";
 echo "<td>".date("Y-m-d H:i:s",$row['launch_time'])."</td>";
 echo "<td><a href='msg_delete.php?mid=$row[mid]'>X</a></td>";
 echo "</tr>";
}
 echo "<tr><td colspan='5'></td><td><a href='msg_add.html'>添加留言</a></td></tr>";
echo "</table>";
