<?php
	$title=$_REQUEST['title'];
	$author=$_REQUEST['author'];
	$conn=mysqli_connect('127.0.0.1','root','','emp');
	$sql="SET NAMES utf8";
	mysqli_query($conn,$sql);
	$sql="INSERT INTO t_book VALUES(null,'$title','$author')";
	$result=mysqli_query($conn,$sql);
	if($result===true){
		echo "添加图书成功";
	}else{
		echo "添加图书失败";
	}
?>