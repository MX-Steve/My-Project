var game={
	RN:20,CN:10,//总行数,列数
	CSIZE:26,OFFSET:15,//每个格子大小和游戏容器内边距
	//保存游戏容器
	pg:document.querySelector(".playground"),
	shape:null,nextShape:null,//保存主角图形
	//保存下落速度和定时器序号
	interval:200,timer:null,
	lines:0,score:0,
		SCORES:[0,10,30,60,100],//得分数组
	wall:null,//1. 方块墙
	start(){//启动游戏
		this.lines=this.score=0;
		this.wall=[];//2. 创建空数组保存在wall中
		//r从0开始，到<RN结束
		for(var r=0;r<this.RN;r++){
			//向wall中添加一个新的CN个空元素的数组
			this.wall[r]=new Array(this.CN);
		}
		this.shape=this.randomShape();//创建新图形，保存在shape中
		this.nextShape=this.randomShape();
		this.paint();//重绘一切
		//启动周期性定时器,调用moveDown
		this.timer=setInterval(
			this.moveDown.bind(this),this.interval);
		//为网页绑定键盘按下事件
		document.onkeydown=function(e){
			switch(e.keyCode){//判断按键号
				case 40: this.moveDown(); break;
				case 37: this.moveLeft(); break;
				case 39: this.moveRight(); break;
				case 32: this.hardDrop(); break;
				case 38: this.rotateR(); break;
				case 90: this.rotateL(); break;
			}
		}.bind(this);
	},
	randomShape(){
		switch(Math.floor(Math.random()*3)){
			case 0: return new O();
			case 1: return new I();
			case 2: return new T();
		}
	},
	canRotate(){
		for(var i=0;i<this.shape.cells.length;i++){
			var cell=this.shape.cells[i];
			if(cell.r<0||cell.r>=this.RN||cell.c<0||cell.c>=this.CN
				||this.wall[cell.r][cell.c]){
				return false;
			}
			return true;
		}
	},
	rotateR(){
		this.shape.rotateR();
		if(this.canRotate())
			this.paint();
		else
			this.shape.rotateL();
	},
	rotateL(){
		this.shape.rotateL();
		if(this.canRotate())
			this.paint();
		else 
			this.shape.rotateR();
	},
	hardDrop(){
		while(this.canDown()){
			this.moveDown();
		}
	},
	canLeft(){//判断能否左移
		//遍历shape中每个cell
		for(var i=0;i<this.shape.cells.length;i++){
			var cell=this.shape.cells[i];//临时保存cell
			if(cell.c==0)//如果cell的c等于0
				return false;//就返回false
			//否则，如果wall中cell左侧有格
			else if(this.wall[cell.r][cell.c-1])
				return false;//就返回false
		}
		return true;//就返回true
	},
	moveLeft(){
		if(this.canLeft())//如果可以左移
			this.shape.moveLeft();
	},
	canRight(){//判断能否右移
		//遍历shape中每个cell
		for(var i=0;i<this.shape.cells.length;i++){
			var cell=this.shape.cells[i];//临时保存cell
			if(cell.c==this.CN-1)//如果cell的c等于CN-1
				return false;//就返回false
			//否则，如果wall中cell右侧有格
			else if(this.wall[cell.r][cell.c+1])
				return false;//就返回false
		}
		return true;
	},
	moveRight(){
		if(this.canRight())//如果可以右移
			this.shape.moveRight();
	},
	paintShape(){//绘制主角图形
		//创建文档片段frag
		var frag=document.createDocumentFragment();
		//遍历shape的cells中每个cell
		for(var i=0;i<this.shape.cells.length;i++){
			//将当前cell临时保存在cell中
			var cell=this.shape.cells[i];
			var img=new Image();//新建一个img
			//设置img的left为cell的c*CSIZE+OFFSET
			img.style.left=
				cell.c*this.CSIZE+this.OFFSET+"px";
			//设置img的top为cell的r*CSIZE+OFFSET
			img.style.top=
				cell.r*this.CSIZE+this.OFFSET+"px";
			img.src=cell.src;//设置img的src为cell的src
			frag.appendChild(img);//将img追加到frag中
		}
		this.pg.appendChild(frag);//将frag追加到pg
	},
	paintNext(){
		var frag=document.createDocumentFragment();
		for(var i=0;i<this.nextShape.cells.length;i++){
			var cell=this.nextShape.cells[i];
			var img=new Image();
			img.style.left=(cell.c+10)*this.CSIZE+this.OFFSET+"px";
			img.style.top=(cell.r+1)*this.CSIZE+this.OFFSET+"px";
			img.src=cell.src;
			frag.appendChild(img);
		}
		this.pg.appendChild(frag);
	},
	paint(){//重绘一切:包含一切重绘方法
		//先删除pg中所有旧的方块img
		var reg=/<img [^>]*>/g;
		this.pg.innerHTML=
			this.pg.innerHTML.replace(reg,"");
		this.paintShape();//重绘主角
		this.paintWall();//7. 重绘方块墙
		this.paintNext();
		this.paintScore();
	},
	canDown(){//判断能否下落
		//遍历shape的cells中每个cell
		for(var i=0;i<this.shape.cells.length;i++){
			var cell=this.shape.cells[i];//临时保存cell
			if(cell.r==this.RN-1)//如果cell的r等于RN-1
				return false;//就返回false
			else if(this.wall[cell.r+1][cell.c])
			//5. 否则如果wall中cell下方有格,就返回false
				return false;
		}
		return true;//就返回true
	},
	landIntoWall(){//4. 将shape中每个cell落入墙中
		//遍历shape的cells中每个cell
		for(var i=0;i<this.shape.cells.length;i++){
			//将当前cell临时保存
			var cell=this.shape.cells[i];
			//将当前cell保存到wall中相同位置
			this.wall[cell.r][cell.c]=cell;
		}
	},
	paintWall(){//6. 专门绘制方块墙
		//创建文档片段frag
		var frag=document.createDocumentFragment();
		//遍历wall中每个元素
		for(var r=this.RN-1;r>=0;r--){
			//如果当前行不是空行
			if(this.wall[r].join("")!=""){
				for(var c=0;c<this.CN;c++){
					//如果wall中当前位置有格
					if(this.wall[r][c]){
						//将当前cell临时保存在cell中
						var cell=this.wall[r][c];
						var img=new Image();//新建一个img
						//设置img的left为cell的c*CSIZE+OFFSET
						img.style.left=
							cell.c*this.CSIZE+this.OFFSET+"px";
						//设置img的top为cell的r*CSIZE+OFFSET
						img.style.top=
							cell.r*this.CSIZE+this.OFFSET+"px";
						//设置img的src为cell的src
						img.src=cell.src;
						frag.appendChild(img);//将img追加到frag中
					}
				}
			}else break;//否则说明上方不再有格，就退出
		}
		this.pg.appendChild(frag);//将frag追加到pg中
	},
	moveDown(){//让主角图形下落一步
		if(this.canDown()){//如果可以下落
			this.shape.moveDown();//才让主角下落
		}else{//停止下落
			this.landIntoWall();//3.shape的cell放入wall中
			var ln=this.deleteRows();//判断并删除满格行
			this.lines+=ln;
			this.score+=this.SCORES[ln];
			this.shape=this.nextShape;
			this.nextShape=this.randomShape();//生成新图形
		}
		this.paint();//重绘一切
	},
	paintScore(){
		var spans=this.pg.getElementsByTagName("span");
		spans[0].innerHTML=this.score;
		spans[1].innerHTML=this.lines;
	},
	isFullRow(r){//判断r行是否满格
		var reg=/^,|,,|,$/;
		//用reg检查wall中r行转为字符串的结果
		return !reg.test(String(this.wall[r]))
	},
	deleteRows(){//删除所有满格行
		//自底向上遍历wall中每一行
		for(var r=this.RN-1,ln=0;r>=0;r--){
			//如果r行是空行,就退出
			if(this.wall[r].join("")=="")
				break;
			//如果r行是满格行
			else if(this.isFullRow(r)){
				this.deleteRow(r);//就删除r行
				ln++;
				if(ln==4) break;
				r++;//r留在原地
			}
		}
		return ln;
	},
	deleteRow(r){//删除一行
		//从r开始，反向遍历wall中每一行
		for(;r>=0;r--){
			this.wall[r]=this.wall[r-1];//用r-1行代替r行
			//将r-1行置为CN个空元素的数组
			this.wall[r-1]=new Array(this.CN);
			//遍历r行中每个格
			for(var c=0;c<this.CN;c++){
				if(this.wall[r][c])//如果当前位置有格
					this.wall[r][c].r++;//将当前格的r+1
			}
			//如果r-2行是空行,就退出循环
			if(this.wall[r-2].join("")=="") break;
		}
	}
}
game.start();//启动游戏