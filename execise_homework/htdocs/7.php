<?php
	$conn=mysqli_connect('127.0.0.1','root','','web1612a');
	$sql="INSERT INTO t_emp VALUES(1000,'lihan',27,'a123')";
	$result=mysqli_query($conn,$sql);
	if($result===true){
		echo "链接成功";
	}else{
		echo "链接失败";
	}
	mysqli_close($conn);
	
?>
