<?php
header("content-type:application/json;charset=utf-8");
$conn=mysqli_connect('127.0.0.1','root','','jd');
$sql="SET NAMES UTF8";
query($conn,$sql);
@$pno=$_REQUEST['pageNum'];
if($pno===null){
	$pno=1;
}else{
	$pno=intval($sql);
};
$output=[
	'productCount'=>0,
	'pageSize'=>8,
	'pagesCount'=>0,
	'pageNum'=>$pno,
	'data'=>null
];
$sql="SELECT count(*) FROM jd_product";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
$output['productCount']=$row[0];
$output['pagesCount']=ceil($output['productCount']/$output['pageSize']);
$count=$output['pageSize'];
$start=($pno-1)*$output['pageSize'];
$sql="SELECT * from jd_product LIMIT $start,$count";
$result=mysqli_query($conn,$sql);
$output['data']=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($output);
