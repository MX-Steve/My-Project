<?php
	$link = mysqli_connect('127.0.0.1','root','','emp');
	$sql="set names utf8";
	mysqli_query($link,$sql);
	$sql="INSERT INTO t_user VALUES(null,'李三','qwe123',10)";
	$result = mysqli_query($link,$sql);
	if($result===true){
		echo "success";
	}else{
		echo "error";
	}
?>