<?php
//1:修改响应主体格式
header("content-type:application/json;charset=utf-8");
//2:获取参数
@$uname = $_REQUEST['uname']or die('{"code":-2,"msg":"用户名不能为空"}');
@$upwd = $_REQUEST['upwd']or die('{"code":-3,"msg":"密码不能为空"}');

//3:连接数据库设置编码
require('init.php');
//4:创建SQL
$sql = "SELECT * FROM jd_user ";
$sql .= " WHERE uname = '$uname'";
$sql .= " AND upwd = '$upwd'";
//5:抓取返回结果
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if($row===null){
  echo '{"code":-1,"msg":"用户名或密码错误"}';
}else{
	$row = ["code"=>1,"msg"=>"登录成功","uname"=>$row['uname'],"uid"=>$row['uid']];
	echo json_encode($row);
}
//6:输出