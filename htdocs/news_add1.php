<?php
	$conn=mysqli_connect('127.0.0.1','root','','steve');
	$uname=$_REQUEST['uname'];
	$content=$_REQUEST['content'];
	$sql="INSERT INTO ifeng VALUES(NULL,'$uname','$content',now())";
	$result=mysqli_query($conn,$sql);
	if($result===true){
		echo "发布成功";
	}else{
		echo "发布失败";
	}
	mysqli_close($conn);
?>