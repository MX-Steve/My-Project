#a:创建库 web1612b
#b:进入库中
#c:创建三张表
#雇员表(编号/姓名/工资/入职时间)
#编号 id   int
#姓名 name varchar(20)
#工资 sal  double(10,2)
#入职时间  ctime  datetime
#部门表(编号/名称)
#编号 id int
#名称 name varchar(50)
#产品表(编号/名称/图片/数量)
#编号 id int
#名称 name varchar(50)
#图片 pic  varchar(50)  "d:/img/1.jpg"
#数量 tcount int

CREATE DATABASE web1612b CHARACTER SET utf8;
use web1612b;
CREATE TABLE t_emp(
 id    int,
 name  varchar(20),
 sal   double(10,2),
 ctime datetime
);
CREATE TABLE t_dept(
  id   int,
  name varchar(50)
);
CREATE TABLE t_pro(
  id   int,
  name varchar(50),
  pid  varchar(50),
  tcount int
);