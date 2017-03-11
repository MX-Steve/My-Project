/*
+function(){
	var chbAll=document.querySelector(//找到全选
		"table>thead input"	
	);
	var chbs=document.querySelectorAll(
		"table>tbody input"	//找到每一个checkbox
	);
	chbAll.onclick=function(){//为全选添加事件
		for(var i=0;i<chbs.length;i++){
			chbs[i].checked=this.checked;
		}
	};
	for(var i=0;i<chbs.length;i++){
		chbs[i].onclick=check;
	}
	function check(){
		var unchecked=document.querySelector("table>tbody input:not(:checked)");
		if(unchecked)
			chbAll.checked=false;
		else
			chbAll.checked=true;
	}
}();

+function(){
	var chbAll=document.querySelector("table>thead input");
	var chbs=document.querySelectorAll("table>tbody input");
	chbAll.onclick=function(){
		for(var i=0;i<chbs.length;i++){
			chbs[i].checked=chbAll.checked;
		}
	};
	for(var i=0;i<chbs.length;i++){
		chbs[i].onclick=check;
	}
	function check(){
		var unchecked=document.querySelector("table>tbody input:not(:checked)");
		if(unchecked)
			chbAll.checked=false;
		else
			chbAll.checked=true;
	}
}();*/
+function(){
	var chbAll=document.querySelector("table>thead input");
	var chbs=document.querySelectorAll("table>tbody input");
	chbAll.onclick=function(){
		for(var i=0;i<chbs.length;i++){
			chbs[i].checked=this.checked;
		}
	}
	for(var i=0;i<chbs.length;i++){
		chbs[i].onclick=check;
	}
	function check(){
		var unchecked=document.querySelector("table>tbody input:not(:checked)");
		if(unchecked)
			chbAll.checked=false;
		else
			chbAll.checked=true;
	}
}();