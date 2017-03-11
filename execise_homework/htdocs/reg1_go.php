<?php
	$conn=mysqli_connect('127.0.0.1','root','','steve');
	$uname=$_REQUEST['uname'];
	$upwd=$_REQUEST['upwd'];
	$sql="INSERT INTO t_login VALUES('$uname','$upwd')";
	$result=mysqli_query($conn,$sql);
	if($result===true){
		echo "登录成功";
	}else{
		echo "登录失败";
	}
	mysqli_close($conn);
?>