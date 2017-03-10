CREATE DATABASE cake CHARACTER SET utf8;
use cake;
CREATE TABLE cake_type(
id int primary key auto_increment,
name varchar(20)
);
CREATE TABLE cake(
id int primary key auto_increment,
pic varchar(30),
tid varchar(30)
);
INSERT INTO cake_type VALUES(null,'鲜奶蛋糕');
INSERT INTO cake_type VALUES(null,'水果蛋糕');
INSERT INTO cake_type VALUES(null,'茅台蛋糕');
INSERT INTO cake VALUES(null,'01.jpg','1');
INSERT INTO cake VALUES(null,'02.jpg','1');
INSERT INTO cake VALUES(null,'03.jpg','1');
INSERT INTO cake VALUES(null,'04.jpg','2');
INSERT INTO cake VALUES(null,'05.jpg','2');
INSERT INTO cake VALUES(null,'06.jpg','2');
SELECT * FROM cake WHERE tid='1';
SELECT * FROM cake WHERE tid='2';