/*
+function(){
	var sel=document.getElementById("sel");
	var unsel=document.getElementById("unsel");
	var selCts=[];
	var unselCts=
		unsel.innerHTML
			 .replace(/^\s*<option>|<\/option>\s*$/g,"")
			 .split(/<\/option>\s*<option>/);
	console.log(unselCts);
	var btns=document.getElementsByTagName("button");
	for(var i=0,len=btns.length;i<len;i++){
		btns[i].onclick=move;
	}
	function move(){
		var btn=this;
		switch(btn.innerHTML){
			case "&gt;&gt;":
				selCts=selCts.concat(unselCts);
				unselCts=[];
				selCts.sort();
				break;
			case "&lt;&lt;":
				unselCts=unselCts.concat(selCts);
				selCts=[];
				unselCts.sort();
				break;
			case "&gt;":
				var opts=unsel.children;
				for(var i=opts.length-1;i>=0;i--){
					if(opts[i].selected)
						selCts.push(unselCts.splice(i,1)[0]);
				}
				selCts.sort();
				break;
			case "&lt;":
				var opts=sel.children;
				for(var i=opts.length-1;i>=0;i--){
					if(opts[i].selected)
						unselCts.push(selCts.splice(i,1)[0]);
				}
				unselCts.sort();
				break;
		}
		updateSel(unsel,unselCts);
		updateSel(sel,selCts);

	}
	function updateSel(select,cts){
		select.innerHTML=cts.length!=0?"<option>"+
			cts.join("</option><option>")
			+"</option>":"";
	}
}();
*/
+function(){
	var unsel=document.getElementById("unsel");
	var unselCts=
		unsel.innerHTML
		.replace(/^\s*<option>|<\/option>\s*$/g,"")
		.split(/<\/option>\s*<option>/);
	var sel=document.getElementById("sel");
	var selCts=[];
	var btns=document.getElementsByTagName("button");
	for(var i=0,len=btns.length;i<len;i++){
		btns[i].onclick=move;
	};
	function move(){
		var btn=this;
		switch(btn.innerHTML){
			case "&gt;&gt;":
				selCts=selCts.concat(unselCts);
				unselCts=[];
				selCts.sort();
				break;
			case "&lt;&lt;":
				unselCts=unselCts.concat(selCts);
				selCts=[];
				unselCts.sort();
				break;
			case "&gt;":
				var opts=unsel.children;
				for(var i=opts.length-1;i>=0;i--){
					if(opts[i].selected)
						selCts.push(unselCts.splice(i,1)[0]);
				}
				unselCts.sort();
				break;
			case "&lt;":
				var option=sel.children;
				for(var i=option.length-1;i>=0;i--){
					if(option[i].selected)
						unselCts.push(selCts.splice(i,1)[0]);
				}
				selCts.sort();
				break;
		}
		updateSel(unsel,unselCts);
		updateSel(sel,selCts);
		function updateSel(select,cts){
			select.innerHTML=cts.length!=0?"<option>"+
				cts.join("</option><option>")+
				"</option>":"";
		}
	}
}();