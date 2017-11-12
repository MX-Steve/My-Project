<?php
	$uname =$_REQUEST['uname'];
	$email =$_REQUEST['email'];
	$content =$_REQUEST['content'];
	$nowTime = time();
	$conn = mysqli_connect('127.0.0.1','root','','msg');
	mysqli_query($conn,"SET NAMES UTF8");
	$sql =  "INSERT INTO t_msg VALUES (null,'$uname','$email','$content',$nowTime)";
	$result =mysqli_query($conn,$sql);
	if($result===true){
		echo "发表成功 <a href='msg_select.php'>浏览全部留言</a>";
	}else{
		echo "发表失败";
	}
