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
 echo "<td>$row[id]</td>";
 echo "<td>:$row[uname]</td>";
 echo "<td>:$row[email]</td>";
 echo "<td>:$row[content]</td>";
 echo "<td>:$row[pubtime]</td>";
 echo "<td><a href='msg_delete.php?id=$row[id]'>X</a></td>";
 echo "</tr>";
}
echo "</table>";
