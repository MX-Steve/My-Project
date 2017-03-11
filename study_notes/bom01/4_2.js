var sDiv=document.getElementById("s");
var mDiv=document.getElementById("m");
var hDiv=document.getElementById("h");
function rotate(){
	var now=new Date();
	var h=now.getHours();
	var m=now.getMinutes();
	var s=now.getSeconds();
	var sDeg=s/60*360;
	var mDeg=m/60*360;
	var hDeg=h/60*360*5;
	sDiv.style.transform="rotate("+sDeg+"deg)";
	mDiv.style.transform="rotate("+mDeg+"deg)";
	hDiv.style.transform="rotate("+hDeg+"deg)";
}
setInterval(rotate,1000);