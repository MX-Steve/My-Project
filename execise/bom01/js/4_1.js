//查找id为time的span
var span=document.getElementById("time");
function calc(){
	var now=new Date();//获得当前时间now
	//定义目标时间
	var end=new Date("2017/2/24 17:30");
	if(end-now>=0){//如果end-now>=0
		//用目标时间-当前时间=时间差
		var s=Math.floor((end-now)/1000);
		var d=Math.floor(s/3600/24);//计算d
		var h=Math.floor(s%(3600*24)/3600);//计算h
		var m=Math.floor(s%3600/60);//计算m
		s%=60;//计算s
		//设置span的内容为:
		span.innerHTML=d+"天"+h+"小时"+m+"分"+s+"秒";
	}else{//否则，说明倒计时结束，就自动停止定时器
		clearInterval(timer); timer=null;
		span.innerHTML="周末愉快！";
	}
}
calc();
//每隔1000毫秒自动调用calc
var timer=setInterval(calc,1000);
//为id为btn的元素绑定单击事件:
document.getElementById("btn").onclick=function(){
  if(timer!=null){//如果?
		clearInterval(timer); timer=null;//习惯
		this.innerHTML="|>";//设置当前按钮的内容为|>
	}else{//否则
		timer=setInterval(calc,1000);
		this.innerHTML="||";//设置当前按钮的内容为||
	}
};