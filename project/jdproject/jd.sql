CREATE DATABASE jd CHARACTER SET utf8;
use jd;
CREATE TABLE t_user(
id int primary key auto_increment,
uname varchar(25),
pwd varchar(32)
);
INSERT INTO t_user VALUES(null,'lihan','123qwe');
INSERT INTO t_user VALUES(null,'李韩n','123456qwe');
INSERT INTO t_user VALUES(null,'石嵩ihan','12ertr3qwe');
INSERT INTO t_user VALUES(null,'程程lihan','123sefgvqwe');

CREATE TABLE t_product(
id int primary key auto_increment,
name varchar(25),
price double(10,2),
pic varchar(25)
);
INSERT INTO t_product VALUES(null,'苹果',25.36,'122.jpg');
INSERT INTO t_product VALUES(null,'西红柿',25.36,'122.jpg');
INSERT INTO t_product VALUES(null,'大苹果',25.36,'122.jpg');
INSERT INTO t_product VALUES(null,'小苹果',25.36,'122.jpg');
INSERT INTO t_product VALUES(null,'红苹果',25.36,'122.jpg');
INSERT INTO t_product VALUES(null,'青苹果',25.36,'122.jpg');
INSERT INTO t_product VALUES(null,'蓝苹果',25.36,'122.jpg');
INSERT INTO t_product VALUES(null,'橘子',25.36,'122.jpg');
INSERT INTO t_product VALUES(null,'大橘子',25.36,'122.jpg');
INSERT INTO t_product VALUES(null,'小橘子',25.36,'122.jpg');
INSERT INTO t_product VALUES(null,'绿橘子',25.36,'122.jpg');