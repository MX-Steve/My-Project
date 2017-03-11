CREATE DATABASE emp CHARACTER SET utf8;
use emp;
CREATE TABLE t_book(
id int primary key auto_increment,
title varchar(25),
author varchar(15)
);
CREATE TABLE t_user(
id int primary key auto_increment,
uname varchar(20),
upwd varchar(35),
did int
);
CREATE TABLE t_dept(
id int,
name varchar(20)
);
INSERT INTO t_user VALUES(null,'lihan','123qwe',10);
INSERT INTO t_user VALUES(null,'李韩','123qwe1',10);
INSERT INTO t_user VALUES(null,'李汉涛','123qwe',10);
INSERT INTO t_user VALUES(null,'韩涛','123qwe',20);
INSERT INTO t_user VALUES(null,'韩涛1','123qwe',20);
INSERT INTO t_user VALUES(null,'韩涛2','123qwe',20);
INSERT INTO t_dept VALUES(10,'财政');
INSERT INTO t_dept VALUES(20,'人事');
SELECT * FROM t_user WHERE uname = 'lihan' AND upwd='123';
SELECT * FROM t_dept;
SELECT * FROM t_user WHERE id = 10;
