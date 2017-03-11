/*
+function(){
	document.getElementsByName("username")[0]
		.onfocus=
	document.getElementsByName("pwd")[0]
		.onfocus=getFocus;
	function getFocus(){
		var txtName=this;
		txtName.className="txt_focus";
		txtName.parentNode
			   .nextElementSibling
			   .firstElementChild
			   .className="";
	}
}();
+function(){
	document.getElementByName("username")[0]
			.focus=
	document.getElementByName("pwd")[0]
			.focus=getFocus;
	function getFocus(){
		this.className="txt_focus";
		this.parentNode
			.nextElementSibling
			.firstElementChild
			.className="";
	}
}();
*/
+function(){
	var txtName=document.getElementsByName("username")[0];
	var txtpwd=document.getElementsByName("pwd")[0];
	txtName.onfocus=txtpwd.onfocus=getFocus;
	function getFocus(){
		this.className="txt_focus";
		this.parentNode
			.nextElementSibling
			.firstElementChild
			.className="";
	}
	txtName.onblur=function(){
		vali(this,/^\w{1,10}$/);//调动vali
	}
	function vali(txt,reg){
		txt.className="";
		var div=txt.parentNode
				   .nextElementSibling
				   .firstElementChild;
		if(reg.test(txt.value))
			div.className="vali_success";
		else
			div.className="vali_fail";
	}
	txtpwd.onblur=function(){
		vali(this,/^\d{6}$/);
	}
	
}();