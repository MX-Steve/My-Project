<?php
$id=$_REQUEST['id'];
$conn=mysqli_connect('127.0.0.1','root','','food');
$sql="SET NAMES UTF8";
mysqli_query($conn,$sql);
$sql="SELECT * FROM foods WHERE type='$id'";
$result=mysqli_query($conn,$sql);
$html='';
while(true){
	$row=mysqli_fetch_assoc($result);
	if($row===null) break;
	$html.='<tr>';
	$html.="<td>$row[id]</td>";
	$html.="<td>$row[name]</td>";
	$html.="<td><img src='$row[pic]' /></td>";
	$html.="<td>$row[price]</td>";
	$html.="<td>$row[type]</td>";
	$html.='</tr>';
}
header("content-type:text/html;charset=utf8");
echo $html;