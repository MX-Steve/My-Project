<?php
	$uname =$_REQUEST['uname'];
	$email =$_REQUEST['email'];
	$content =$_REQUEST['content'];
	$conn = mysqli_connect('127.0.0.1','root','','msg');
	$sql =  "INSERT INTO t_msg VALUES (null,'$uname','$email','$content',now())";
	$result =mysqli_query($conn,$sql);
	if($result===true){
		echo "发表成功 <a href='msg_select.php'>浏览全部留言</a>";
	}else{
		echo "发表失败";
	}
?>