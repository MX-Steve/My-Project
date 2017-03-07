<?php
	$name1=$_REQUEST['name1'];
	$pwd=$_REQUEST['pwd'];
	$conn=mysqli_connect('127.0.0.1','root','','web1612a');
	$sql="INSERT INTO t_login VALUES('$name1','$pwd')";
	$result=mysqli_query($conn,$sql);
	if($result===true){
		echo "注册成功";
	}else{
		echo "注册失败";
	}
	//mysqli_close($coon);
?>