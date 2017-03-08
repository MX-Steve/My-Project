CREATE DATABASE sohu CHARACTER SET utf8;
use sohu;
CREATE TABLE t_user(
id int primary key auto_increment,
uname varchar(20),
upwd varchar(30)
);
INSERT INTO t_user VALUES(null,'李韩','123456');
INSERT INTO t_user VALUES(null,'李韩1','1234567');
INSERT INTO t_user VALUES(null,'李韩2','12345678');