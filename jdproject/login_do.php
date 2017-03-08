<?php
	$link = mysqli_connect('127.0.0.1','root','','jd');
	$sql = "set names utf8";
	mysqli_query($link,$sql);
	$uname = $_REQUEST['uname1'];
	$pwd = $_REQUEST['pwd1'];
	$sql = "SELECT * FROM t_user WHERE uname='$uname' and pwd = '$pwd'";
	$result = mysqli_query($link,$sql);
	$row = mysqli_fetch_assoc($result);
	if($row === null){
		echo "登录失败!";
		echo "<a href='login.html'>返回登录</a>";
	}else{
		echo "登录成功!";
		echo "<a href='product_list_do1.php'>查看商品</a>";
	}
?>