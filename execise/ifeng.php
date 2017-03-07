<?php
	 //*1:连接数据库
	 $conn = mysqli_connect('127.0.0.1',
	 'root','','ifeng');
	 $sql = "set names utf8";
	 mysqli_query($conn,$sql);
	 //*2:创建sql SELECT * FROM t_user
	 $sql = "SELECT * FROM t_news";
	 //*3:发送sql
	 $result = mysqli_query($conn,$sql);
	 while(true){
	  $row = mysqli_fetch_assoc($result);
		if($row === NULL){
		  break;
		}
	  echo $row['id'].':'.$row['title'].'<br />';
	 }

?>