<?php
	$link = mysqli_connect('127.0.0.1','root','','jd');
	$sql="set names utf8";
	mysqli_query($link,$sql);
	$uname=$_REQUEST['uname'];
	$pwd=$_REQUEST['pwd'];
	$sql="INSERT INTO t_user VALUES(null,'$uname','$pwd')";
	$result=mysqli_query($link,$sql);
	if($result === true){
		echo "注册成功!";
		echo "<a href='login.html'>立即登录</a>";
	}else{
		echo "注册失败!";
		echo "<a href='register.html'>返回注册</a>";
	}
?>