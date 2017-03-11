<?php
//1:获取用户名  17:28--17:32
//2:连接数据库
//3:设置编码
	$uname = $_REQUEST['uname'];
	$upwd = $_REQUEST['upwd'];

	$conn = mysqli_connect('127.0.0.1','root','','sohu');
	$sql = "SET NAMES UTF8";
	mysqli_query($conn,$sql);
//*4:查询数据库中是否存参数中用户名
//*5:抓取数据
  $sql = "SELECT * FROM t_user ";
	$sql .= " WHERE uname = '$uname'";
	$sql .= " AND upwd = '$upwd'";

	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
//6:输出 "error"
//7:输出 "success"
  if($row===null){
	  echo "error";
	}else{
	  echo "success";
	}