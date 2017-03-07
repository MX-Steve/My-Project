<?php
	for($j=1;$j<=9;$j++){
		for($i=1;$i<=$j;$i++){
			echo "$i*$j=" . $i*$j ."&nbsp;";
		};
		echo "<br />";
	}
?>
<?php
	echo "<table border='1'>";
	echo "<tbody>";
	for($i=1;$i<=9;$i++){
		echo "<tr>";
		for($j=1;$j<=$i;$j++){
			echo "<td>";
			//echo "$i*$j=" . $i*$j ."&nbsp;";
			echo $i.'*'.$j.'='.$i*$j."&nbsp;";
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</tbody>";
	echo "</table>";
?>
<?php
	$arr1=array(2,23,4,24);
	$arr2=[2,23,5,23];
	echo $arr1[0];
	echo "<br />";
	echo $arr2[0];
	echo "<br />";
	var_dump($arr1);
	
	for($i=0,$re=0;$i<count($arr1);$i++){
		$re+=$arr1[$i];
	}
	echo $re;
	$arr1[]=10;
	var_dump($arr1);
	$arr=['id'=>1,'name'=>'steve'];
	echo $arr['id'];
	echo count($arr);
	foreach($arr as $k=>$v){
		echo $k ."=". $v."<br />"; 
	}
	$book =['title'=>'三国志'];
	echo $book['title'];
	//echo $book[title];
	echo "数码: $book[title]";
	//echo "数码：$bobk[name]";
	$arr3=['id'=>1,'name'=>'lihan','age'=>28,'grade'=>8];
	foreach($arr3 as $k=>$v){
		echo $k."=".$v."&nbsp;";
	}
	echo $arr3['age'];
	echo "年龄：$arr3[age]";
?>
<?php
	$arr4=[];
	$arr4[]=['id'=>101,'name'=>'三国','price'=>100,'pic'=>'1.png'];
	$arr4[]=['id'=>102,'name'=>'红楼','price'=>110,'pic'=>'2.png'];
	$arr4[]=['id'=>103,'name'=>'水浒','price'=>180,'pic'=>'3.png'];
	$arr4[]=['id'=>104,'name'=>'西游','price'=>190,'pic'=>'4.png'];
	echo "<table>";
	echo "<tbody>";
	for($i=0;$i<count($arr4);$i++){
		echo "<tr>";
		foreach($arr4 as $k=>$v){
			echo "<td>";
			echo $k.":".$v;
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</tbody>";
	echo "</table>";
?>
