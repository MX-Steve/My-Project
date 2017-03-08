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
		$sql = "SELECT * FROM t_product";
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
	</table>
	<a href="">首页</a>
	<a href="">上一页</a>
	<a href="product_list?pageNo=1">1</a>
	<a href="product_list?pageNo=2">2</a>
	<a href="product_list?pageNo=3">3</a>
	<a href="">下一页</a>
	<a href="">尾页</a>
</body>
</html>