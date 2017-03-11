<?php
	$conn = mysqli_connect('127.0.0.1','root','','huimaiche');
	$sql = "set names utf8";
	mysqli_query($conn,$sql);
	$id=$_REQUEST['id'];
	$sql="SELECT * FROM t_car WHERE type='$id'";
	$result=mysqli_query($conn,$sql);
	$html="";
	while(true){
		$row=mysqli_fetch_assoc($result);
		if($row ===null) break;
		$html.="<tr><td>$row[id]</td>";
		$html.="<td>$row[name_short]</td>";
		$html.="<td>$row[name_full]</td>";
		$html.="<td><img src='$row[pic_th]' /></td>";
		$html.="<td><img src='$row[pic_full]' /></td>";
		$html.="<td>$row[price]</td>";
		$html.="<td>$row[type]</td>";
		$html.="</tr>";
	}
	echo $html;