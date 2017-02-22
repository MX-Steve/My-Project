var game={
	RN:20,CN:10,//总行、列
	CSIZE:26,//每个格子大小
	OFFSET:15,//内边距
	pg:document.querySelector(".playground"),
	shape:null,//保存主角图形
	timer:null,interval:200,
	wall:null,//方块墙
	start(){//启动游戏
		this.wall=[];
		for(var r=0;r<this.RN;r++){
			this.wall[r]=new Array(this.CN);
		}
		//创建一个图形，保存在shape中
		this.shape=new O();
		this.paintShape();//绘制主角
		this.paint();//重绘一切
		this.timer=setInterval(	
			this.moveDown.bind(this),this.interval);
		//为网页绑定键盘按下事件
		document.onkeydown=function(e){
			switch(e.keyCode){
				case 40: this.moveDown(); break;
				case 37: this.moveLeft(); break;
				case 39: this.moveRight(); break;
				case 32: this.hardDrop(); break;
			}
		}.bind(this);
	},
	hardDrop(){
		while(this.canDown())
			this.moveDown();
	},
	canDown(){//判断能否下落
		//遍历shape的cells中每个cell
		for(var i=0;i<this.shape.cells.length;i++){
			var cell=this.shape.cells[i];//临时保存cell
			if(cell.r==this.RN-1)//如果cell的r等于RN-1
				return false;//就返回false
			else if(this.wall[cell.r+1][cell.c])
				//5. 否则如果wall中cell下方有格,就返回false
				return false;//就返回false
		}
		return true;
	},
	moveDown(){//让主角图形下落一步
		if(this.canDown()){
			this.shape.moveDown();
		}else{
			this.landIntoWall();//shape中的cell放入wall中
			this.deleteRows();//判断并删除满格行
			this.shape=new O();//生成新图形
		}
		this.paint();//重绘一切
	},
	canLeft(){
		for(var i=0;i<this.shape.cells.length;i++){
			var cell=this.shape.cells[i];
			if(cell.c==0) return false;
			else if(this.wall[cell.r][cell.c-1]) return false;
		}return true;
	},
	moveLeft(){
		if(this.canLeft())
		this.shape.moveLeft();
	},
	canRight(){
		for(var i=0;i<this.shape.cells.length;i++){
			var cell=this.shape.cells[i];
			if(cell.c==this.CN-1) return false;//有错
			else if(this.wall[cell.r][cell.c+1]) return false;
		}
		return true;
	},
	moveRight(){
		if(this.canRight())
		this.shape.moveRight();
	},
	isFullRow(r){
		var reg=/^,|,,|,&/;
		return !reg.test(String(this.wall[r]));
	},
	deleteRows(){//删除所有满格行
		//自底向上遍历wall中每一行
		for(var r=this.RN-1,ln=0;r>=0;r--){
			//如果r行是空行,就退出
			if(this.wall[r].join("")=="")
				break;
			//如果r行是满格行
			else if(this.isFullRow(r)){
				this.deleteRow(r);
				ln++;
				if(ln==4) break;
				r++;
			}
		}
		return ln;
	},
	deleteRow(r){//删除一行
		//从r开始，反向遍历wall中每一行
		for(;r>=0;r--){
			//用r-1行代替r行
			this.wall[r]=this.wall[r-1];
			//将r-1行置为CN个空元素的数组
			this.wall[r-1]=new Array(this.CN);
			//遍历r行中每个格
			for(var c=0;c<this.CN;c++){
				if(this.wall[r][c])//如果当前位置有格
					this.wall[r][c].r++;
			}
			//如果r-2行是空行,就退出循环
			if(this.wall[r-2].join("")=="") break;
		}	
	},
	paintShape(){//绘制主角图形
		var frag=document.createDocumentFragment();
		//遍历shape的cells中每个cell
		for(var i=0;i<this.shape.cells.length;i++){
			//将当前cell临时保存在cell中
			var cell=this.shape.cells[i];
			var img=new Image();//新建一个img
			img.style.left=cell.c*this.CSIZE+this.OFFSET+"px";
			//设置img的left为cell的c*CSIZE+OFFSET
			img.style.top=cell.r*this.CSIZE+this.OFFSET+"px";
			//设置img的top为cell的r*CSIZE+OFFSET
			img.src=cell.src;//设置img的src为cell的src
			frag.appendChild(img);
		}
		this.pg.appendChild(frag);	
	},
	paint(){//重绘一切
		var reg=/<img [^>]*>/g;
		this.pg.innerHTML=this.pg.innerHTML.replace(reg,"");
		this.paintShape();//绘制主角
		this.paintWall();//绘制方块墙
	},
	landIntoWall(){//4. 将shape中每个cell落入墙中
		for(var i=0;i<this.shape.cells.length;i++){
			//遍历shape的cells中每个cell
			var cell=this.shape.cells[i];//将当前cell临时保存
			this.wall[cell.r][cell.c]=cell;//将当前cell保存到wall中相同位置
		}
	},
	paintWall(){//6. 专门绘制方块墙
		//创建文档片段
		var frag=document.createDocumentFragment();
		//遍历wall中每个元素
		for(var r=this.RN-1;r>=0;r--){
			if(this.wall[r].join("")!=""){//如果当前行不是空行
				for(var c=0;c<this.CN;c++){
					if(this.wall[r][c]){//如果wall中当前位置有格
						var cell=this.wall[r][c];//将当前cell临时保存在cell中
						var img=new Image();//新建一个img
						//设置img的left为cell的c*CSIZE+OFFSET
						img.style.left=cell.c*this.CSIZE+this.OFFSET+"px";
						img.style.top=cell.r*this.CSIZE+this.OFFSET+"px";
						img.src=cell.src;//设置img的src为cell的src
						frag.appendChild(img);//将img追加到frag中
					}
				}
			}else break;//否则说明上方不再有格，就退出
		}
		this.pg.appendChild(frag);
	},
	
}
game.start();