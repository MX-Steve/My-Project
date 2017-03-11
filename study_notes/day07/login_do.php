<?php
	$link = mysqli_connect('127.0.0.1','root','','emp');
	$sql = "set names utf8";
	mysqli_query($link,$sql);
	$uname = $_REQUEST['uname'];
	$pwd = $_REQUEST['pwd'];
	$sql = "SELECT * FROM t_user WHERE uname='$uname' and upwd = '$pwd'";
	$result = mysqli_query($link,$sql);
	$row = mysqli_fetch_assoc($result);
	if($row === null){
		echo "登录失败!";
		echo "<a href='login.html'>返回登录</a>";
	}else{
		echo "登录成功!";
	}
?>