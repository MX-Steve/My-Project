<html>
<body>

<?php
function add($x,$y)
{
$total=$x+$y;
return $total;
}

echo "1 + 16 = " . add(1,16);
echo "<br />";
?>

<?php
	for($i=1;$i<10;$i++){
		$x=++$x;
		echo $x;
	}
	
?>
</body>
</html>