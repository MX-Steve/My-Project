//按id查找三个指针:
var sDiv=document.getElementById("s");
var mDiv=document.getElementById("m");
var hDiv=document.getElementById("h");
function rotate(){
	var now=new Date();//获得当前时间now
	//分别获得时,分,秒
	var s=now.getSeconds();
	var m=now.getMinutes();
	var h=now.getHours();
	//分别计算时,分,秒对应的角度
	var sDeg=360*s/60;
	var mDeg=(m*60+s)/3600*360;
	var hDeg=(h*3600+m*60+s)/(3600*12)*360;
	//分别修改sDiv,mDiv,hDiv的旋转角度
	sDiv.style.transform="rotate("+sDeg+"deg)";
	mDiv.style.transform="rotate("+mDeg+"deg)";
	hDiv.style.transform="rotate("+hDeg+"deg)";
}//8分钟练习←_←!
setInterval(rotate,1000)