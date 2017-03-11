<?php
	$link = mysqli_connect('127.0.0.1','root','','sohu');
	$sql="set names utf8";
	mysqli_query($link,$sql);
	$uname=$_REQUEST['uname'];
	$pwd=$_REQUEST['upwd'];
	$sql="SELECT * FROM t_user WHERE uname = '$uname' AND upwd = '$pwd'";
	$result = mysqli_query($link,$sql);
	$row = mysqli_fetch_assoc($result);
	if($row===null){
		echo "error";
	}else{
		echo "success";
	}
?>