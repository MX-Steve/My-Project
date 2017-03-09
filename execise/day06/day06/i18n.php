<?php
//1:获取请求消息所有头部
$list = getallheaders();
//2:读取可接收语言请求头部信息
$lang = $list['Accept-Language'];
//3:读取客户端首先语言--截取前2位
$start2 = substr($lang,0,2);
//4:修改响应头部类型
header("content-type:application/javascript;charset=utf-8");
//5:判断输出
if($start2=='zh'){
	echo "var msg = '你好';alert(msg);";
}else if($start2=='ja'){
	echo "var msg = '...';alert(msg)";
}else{
  echo "var msg = 'Hello';alert(msg)";
}