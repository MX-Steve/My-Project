<?php
	$uname=$_REQUEST['uname'];
	$conn=mysqli_connect('127.0.0.1','root','','sohu');
	$sql="set names utf8";
	mysqli_query($conn,$sql);
	$sql="SELECT * FROM t_user WHERE uname='$uname'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	if($row===null){
		echo "该用户不存在，可用";
	}else{
		echo "该用户存在，不可用";
	}
?>