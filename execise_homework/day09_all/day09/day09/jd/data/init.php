<?php
//公共php代码写在该文件中
//找到需要使用php代码程序
//require('init.php');
//包含加载目标程序
$conn = mysqli_connect('127.0.0.1',
'root','','jd');
$sql = "SET NAMES UTF8";
mysqli_query($conn,$sql);
