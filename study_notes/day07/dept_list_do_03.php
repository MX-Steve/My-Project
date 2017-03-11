<?php
	$link = mysqli_connect('127.0.0.1','root','','emp');
	$sql = "set names utf8";
	mysqli_query($link,$sql);
	$sql = "SELECT * FROM t_dept";
	$result = mysqli_query($link,$sql);
	$msg="";
	while(true){
		$row = mysqli_fetch_assoc($result);
		if($row === null) break;
		$msg.="<tr>";
		$msg.="<td>$row[id]</td>";
		$msg.="<td>$row[name]</td>";
		$msg.="</tr>";
	}
	echo $msg;