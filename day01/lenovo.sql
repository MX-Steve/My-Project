#综合练习:根据注释编写SQL,不要看笔记
#1:创建数据库 lenovo 数据库编码utf8
CREATE DATABASE lenovo CHARACTER SET utf8;
#2:进入数据库 lenovo
use lenovo;
#3:创建部门信息表 (id,dname,empcount)
#id 编号/dname 部门名称/empcount 雇员数量
CREATE TABLE t_dept(
  id int,
  dname varchar(20),
  empcount int
);
#4:插入三行部门信息
#10  account  6
#20  manager  0
#30  software 0 
INSERT INTO t_dept VALUES(10,'account',6);
INSERT INTO t_dept VALUES(20,'manager',0);
INSERT INTO t_dept VALUES(30,'software',0);
#5:创建员工信息表
#(id,ename,sex,salary,birthday,deptid)

#id 编号/ename 雇员姓名/sex 性别
#salary 工资/birthday 生日/depetid 部门编号
CREATE TABLE t_emp(
 id int,
 ename varchar(20),
 sex   varchar(1),
 salary double(10,2),
 birthday datetime,
 depetid int
);
#6:添加6个员工信息
INSERT INTO t_emp VALUES(1,'tom1',
'M',10000.10,'1995-10-10',10);
INSERT INTO t_emp VALUES(2,'tom2',
'M',20000.10,'1995-10-10',10);
INSERT INTO t_emp VALUES(3,'tom3',
'M',30000.10,'1995-10-10',10);
INSERT INTO t_emp VALUES(4,'tom4',
'M',14000.10,'1995-10-10',10);
INSERT INTO t_emp VALUES(5,'tom5',
'M',11000.10,'1995-10-10',10);
INSERT INTO t_emp VALUES(6,'tom6',
'M',15000.10,'1995-10-10',10);
#7:删除id=2员工信息，并且修改对应部门人数
 DELETE FROM t_emp WHERE id = 2;
 UPDATE t_dept SET empcount = 5
 WHERE id = 10;
#参考:lenovo.sql