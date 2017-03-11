<?php
	$list=getallheaders();
	$Lang=$list['Accept-Language'];
	$start2=subStr($Lang,0,2);
	header("content-type:application/javascript;charset=utf-8");
	if($start2==="zh"){
		echo "var msg='你好';alert(msg);";
	}else if($start2==="ja"){
		echo "var msg='konijiva';alert(msg)";
	}else{
		echo "var msg='hello';alert(msg)";
	}
?>