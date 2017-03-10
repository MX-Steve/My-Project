<?php
	$id=$_REQUEST['id'];
	require('init.php');
	$sql="SELECT * FROM cake WHERE tid=$id";
	$result=mysqli_query($conn,$sql);
	$html="";
	while(true){
		$row=mysqli_fetch_assoc($result);
		if($row===null) break;
		$html.="<li><img src='$row[pic]' /></li>";
	}
	echo $html;