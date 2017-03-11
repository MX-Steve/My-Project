<?php
	$link = mysqli_connect('127.0.0.1','root','','dangdang');
	$sql="SET NAMES UTF8";
	mysqli_query($link,$sql);
	$book=$_REQUEST['book'];
	$sql="SELECT title FROM t_book WHERE title LIKE '%$book%'";
	$result = mysqli_query($link,$sql);
	$html='';
	while(true){
		$row=mysqli_fetch_assoc($result);
		if($row===null) break;
		$html .="<li>$row[title]</li>";
		header("content-type:text/html;charset=utf-8");
		echo $html;
	}
?>