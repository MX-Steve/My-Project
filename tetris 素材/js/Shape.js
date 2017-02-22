/*
	专门描述格子和图片的数据结构和功能
*/
//定义Cell类型描述一个格子
function Cell(r,c,src){
	this.r=r; this.c=c; this.src=src;
}
/*
function Cell(r,c,src){
	this.r=r;this.c=c;this.src=src;
}
/
/*定义所有图形的的公共父类型Shape
		所有图形都有一个格子数组，包含四个格子
		所有图片否可以下落左移，右移，旋转
 */
 function Shape(r0,c0,r1,c1,r2,c2,r3,c3,src,states,orgi){
	this.cells=[
		new Cell(r0,c0,src),
		new Cell(r1,c1,src),
		new Cell(r2,c2,src),
		new Cell(r3,c3,src),
	];
	this.states=states;//保存状态
	this.orgCell=this.cell[orgi];//根据下标获得参照格对象
	this.statei=0;
 }
Shape.prototype={//重定义Shape的原型对象
	moveDown(){//图片下落
		//遍历当前图形的cells中每个cell
		for(var i=0;i<this.cells.length;i++)
			this.cells[i].r++;
	},
	moveLeft(){
		for(var i=0;i<this.cells.length;i++)
			this.cells[i].c--;
	},
	moveRight(){
		for(var i=0;i<this.cells.length;i++)
		this.cells[i].c++;
	},
	rotateR(){//顺时针
		
	},
	rotateL(){//逆时针
	
	},
}
//旋转状态
/*
	为每种图形定义专门的类型
		子类型的构造函数中借用shape构造函数，传入每个
			格子的坐标和图片路径
		子类型的原型要继承shape的原型
*/
function T(){
	Shape.call(this,
		0,3,0,4,0,5,1,4,
		"img/T.png",
		[
			new State(0,-1, 0,0, 0,+1, +1,0),
			new State(-1,0, 0,0, +1,0, 0,-1),
			new State(0,+1, 0,0, 0,-1, -1,0),
			new State(+1,0, 0,0, -1,0, 0,+1)
		],
		1)
}
Object.setPrototypeOf(T.prototype,Shape.prototype);
function I(){
	Shape.call(this,0,3,0,4,0,5,0,6,"img/I.png",
		[
			new State(0,-1, 0,0, 0,+1, 0,+2),
			new State(-1,0, 0,0, +1,0, +2,0)
		]
		,1)
}
Object.setPrototypeOf(I.prototype,Shape.prototype);
function O(){
	Shape.call(this,0,4,0,5,1,4,1,5,"img/O.png",
		[new State(0,-1, 0,0, +1,-1, +1,0)],
		1)
}
Object.setPrototypeOf(O.prototype,Shape.prototype);
function J(){
	Shape.call(this,0,5,1,5,2,5,2,4,"img/J.png")
}
Object.setPrototypeOf(J.prototype,Shape.prototype);
function L(){
	Shape.call(this,0,5,1,5,2,5,2,6,"img/L.png")
}
Object.setPrototypeOf(L.prototype,Shape.prototype);
function Z(){
	Shape.call(this,0,4,0,5,1,5,1,6,"img/J.png")
}
Object.setPrototypeOf(Z.prototype,Shape.prototype);