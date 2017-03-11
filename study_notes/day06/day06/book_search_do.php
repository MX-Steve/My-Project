<?php
//1:获取用户名  17:28--17:32
//2:连接数据库
//3:设置编码
$kw = $_REQUEST['kw'];
$conn = mysqli_connect('127.0.0.1','root','','dangdang');
$sql = "SET NAMES UTF8";
mysqli_query($conn,$sql);
//4:创建sql select
$sql = "SELECT title FROM t_book";
$sql .=" WHERE title LIKE '%$kw%'";
$result = mysqli_query($conn,$sql);
//5:创建循环
$html = '';//拼接html
while(true){
//6:一行一行抓取数据 title
$row = mysqli_fetch_assoc($result);
if($row===null){
	break;
}
//7:拼接 <li></li>
$html .= "<li>$row[title]</li>";
}
//8:header text/html
header("content-type:text/html;charset=utf-8");
//9:echo html
echo $html;