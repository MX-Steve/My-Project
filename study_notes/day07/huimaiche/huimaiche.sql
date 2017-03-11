CREATE DATABASE huimaiche CHARACTER SET utf8;
use huimaiche;
CREATE TABLE t_car(
id int primary key auto_increment,
name_short varchar(30),
name_full varchar(70),
pic_th   varchar(50),
pic_full varchar(60),
price double(10,2),
type varchar(30)
);
INSERT INTO t_car VALUES(null,'奔驰1','奔驰基数530','8_1.jpg','8_1_full.jpg',25.23,'lt8');
INSERT INTO t_car VALUES(null,'奔驰2','奔驰基数530','8_2.jpg','8_2_full.jpg',215.23,'lt8');
INSERT INTO t_car VALUES(null,'奔驰3','奔驰基数530','8_3.jpg','8_3_full.jpg',205.23,'lt8');
INSERT INTO t_car VALUES(null,'宝马1','宝马740基数530','15_1.jpg','15_1_full.jpg',25.23,'lt15');
INSERT INTO t_car VALUES(null,'宝马2','宝马740基数530','15_2.jpg','15_2_full.jpg',25.23,'lt15');
INSERT INTO t_car VALUES(null,'宝马3','宝马740基数530','15_3.jpg','15_3_full.jpg',25.23,'lt15');
INSERT INTO t_car VALUES(null,'大众1','大众捷达基数530','30_1.jpg','30_1_full.jpg',245.23,'1t30');
INSERT INTO t_car VALUES(null,'大众2','大众捷达基数530','30_2.jpg','30_2_full.jpg',245.23,'1t30');
INSERT INTO t_car VALUES(null,'大众3','大众捷达基数530','30_3.jpg','30_3_full.jpg',245.23,'1t30');
INSERT INTO t_car VALUES(null,'suv1','大众捷达基数530','suv_1.jpg','suv_1_full.jpg',250.23,'suv');
INSERT INTO t_car VALUES(null,'suv2','大众捷达基数530','suv_2.jpg','suv_2_full.jpg',250.23,'suv');
INSERT INTO t_car VALUES(null,'suv3','大众捷达基数530','suv_3.jpg','suv_3_full.jpg',250.23,'suv');