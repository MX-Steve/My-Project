CREATE DATABASE food CHARACTER SET utf8;
use food;
CREATE TABLE foods(
id int primary key auto_increment,
name varchar(20),
pic varchar(30),
price double(5,2),
type varchar(20)
);
INSERT INTO foods VALUES(null,'可口可乐','drink/1.jpg',12.35,'drink');
INSERT INTO foods VALUES(null,'百事可乐','drink/2.jpg',10.35,'drink');
INSERT INTO foods VALUES(null,'白色栟榈','drink/3.jpg',22.35,'drink');
INSERT INTO foods VALUES(null,'芒果','fruit/1.jpg',8.35,'fruit');
INSERT INTO foods VALUES(null,'白果','fruit/2.jpg',18.35,'fruit');
INSERT INTO foods VALUES(null,'苹果','fruit/3.jpg',28.35,'fruit');
INSERT INTO foods VALUES(null,'螺旋面包','bread/1.jpg',2.35,'bread');
INSERT INTO foods VALUES(null,'方块面包','bread/2.jpg',21.35,'bread');
INSERT INTO foods VALUES(null,'烧烤面包','bread/3.jpg',20.35,'bread');
SELECT * FROM foods;
SELECT * FROM foods WHERE type='drink';
SELECT * FROM foods WHERE type='fruit';
SELECT * FROM foods WHERE type='bread';
