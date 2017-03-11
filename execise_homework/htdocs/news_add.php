<?php
	$title1=$_REQUEST['title1'];
	$content=$_REQUEST['content'];
	$conn=mysqli_connect('127.0.0.1','root','','ifeng');
	$sql="INSERT INTO t_news VALUES('$title1','$content',now(),null)";
	$result=mysqli_query($conn,$sql);
	if($result===true){
		echo "成功";
	}else{
		echo "失败";
	}

?>
