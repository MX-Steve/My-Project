<?php
	echo "Hello php";
	//echo phpInfo();
	echo "*";
	echo "<br />";
	for($i=0;$i<5;$i++){
		for($j=0;$j<$i;$j++){
			echo "*";
		}
		echo "<br />";
	}
	echo "<br />";
	for($i=1;$i<=9;$i++){
		for($j=1;$j<=$i;$j++){
			echo $j."*".$i."=".$i*$j." ";
		}
		echo "<br />";
	}
	echo "<br />";
	echo "<table border=1>";
	for($i=1;$i<=9;$i++){
		echo "<tr>";
		for($j=1;$j<=$i;$j++){
			echo "<td>";
			echo $j."*".$i."=".$i*$j." ";
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	echo "<br />";
	$arr=[];
	//echo "<table border=1>";
	//echo "<tr>";
	//echo "<td>";
	$arr[]=['id'=>1,'name'=>'三国志','price'=>110,'picture'=>'1.jpg'];
	$arr[]=['id'=>2,'name'=>'红楼梦','price'=>10,'picture'=>'2.jpg'];
	$arr[]=['id'=>3,'name'=>'水浒传','price'=>150,'picture'=>'3.jpg'];
	$arr[]=['id'=>4,'name'=>'西游记','price'=>190,'picture'=>'4.jpg'];
	//echo "</td>";
	//echo "</tr>";
	//echo "</table>";

	
?>
