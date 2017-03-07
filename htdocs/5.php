<?php
	for($j=0;$j<5;$j++){
		for($i=0;$i<10;$i++){
			echo "X ";
		};
		echo "<br />";
	}
?>
<?php
	$start="↑";
	for($j=0;$j<5;$j++){
		for($i=0;$i<10;$i++){
			echo $start;
		};
		echo "<br />";
	}
?>
<?php
	$i=10;
	echo $i;
	$ename ='tom';
	$age = 20;
	$info = "姓名：$ename 年龄：$age";
	echo $info;
	echo "<br />";
	$list = '姓名'.$ename.'年龄'.$age;
	echo $list;
?>