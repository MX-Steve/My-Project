<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>product_list_do</title>
</head>
<body>
	<h1>商品列表</h1>
	<table border=1>
	<tr>
		<td>序号</td>
		<td>商品名称</td>
		<td>商品价格</td>
		<td>商品图片</td>
	</tr>
	<?php
		$link = mysqli_connect('127.0.0.1','root','','jd');
		$sql = "set names utf8";
		mysqli_query($link,$sql);
		$pageNo = 1;
		if(!empty($_REQUEST['pageNo'])){
			$pageNo = $_request['pageNo'];
		}
		$sql = "SELECT count(id) FROM t_product";
		$result = mysqli_query($link,$sql);
		$row = mysqli_fetch_row($result);	
		$count = $row[0];
		if($count%3 == 0){
			$pages=intval($count/3);
		}else{
			$pages=intval(($count/3)+1);
		}
		$p=0;
		$sql = "SELECT * FROM t_product limit $p,3";
		$result = mysqli_query($link,$sql);
		while(true){
			$row = mysqli_fetch_assoc($result);
			if($row === null) break;
			echo "<tr>";
			echo "<td>$row[id]</td>";
			echo "<td>$row[name]</td>";
			echo "<td>$row[price]</td>";
			echo "<td><img src='$row[pic]' /></td>";
			echo "</tr>";
		}
	
	echo "<tr>";
	echo "<td></td><td></td><td></td>";
	echo "<td>";
	for($i=1;$i<=$pages;$i++){
		echo "<a href='product_list_do2?pageNo=$i'>$i</a>";	
	}
	echo ""
	echo "</td>";
	echo "</tr>";
?>
	</table>
</body>
</html>