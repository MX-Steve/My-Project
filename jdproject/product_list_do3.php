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
		$pageNo = 3;
		if(empty($_REQUEST['pageNo'])===false){
			$pageNo = $_REQUEST['pageNo'];
		}
		$pageNo =($pageNo-1)*3;
		$sql = "SELECT * FROM t_product limit $pageNo,3";
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
	?>
	<tr>
		<td></td><td></td><td></td>
		<td>
			<a href="product_list_do1.php?pageNo=1">首页</a>
			<a href="">上一页</a>
			<a href="product_list_do1.php?pageNo=1">1</a>
			<a href="product_list_do2.php?pageNo=2">2</a>
			<a href="product_list_do3.php?pageNo=3">3</a>
			<a href="product_list_do4.php?pageNo=4">4</a>
			<a href="">下一页</a>
			<a href="product_list_do3.php?pageNo=3">尾页</a>
		</td>
	</tr>
	</table>
</body>
</html>