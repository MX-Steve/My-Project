<?php
 //1:连接数据库
 //2:设置编码
	$conn = mysqli_connect('127.0.0.1','root','','dangdang');
	$sql = "SET NAMES UTF8";
	mysqli_query($conn,$sql);
  //3:创建sql
	$sql = "SELECT * FROM t_book";
  //4:发送sql
	$result = mysqli_query($conn,$sql);
  //5:获取结果
  //6:拼字符串  
	$xml = "";
	$xml .= "<?xml version='1.0' encoding='utf-8'?>";
	$xml .= "<books>";
  while(true){
	  $row = mysqli_fetch_assoc($result);
		if($row===null){
		  break;
		}
		$xml .= "<book>";
    $xml .= "<title>$row[title]</title>";
    $xml .= "<pic>$row[pic]</pic>";
    $xml .= "<price>$row[price]</price>";
		$xml .= "</book>";
	}
	$xml .= "</books>";
  //#设置响应主体格式
header("content-type:application/xml;charset=utf-8");
	//#输出
	echo $xml;