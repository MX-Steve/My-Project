#1:查询雇员表中所有信息
   SELECT * FROM   t_emp;
#2:查询部门表中所有信息
   SELECT * FROM t_dept;
#3:查询部门表中所有信息条件部门编号等于10
    SELECT * FROM t_dept
    WHERE id = 10;
#4:查询雇员表中所有信息条件部门编号等于10
    SELECT * FROM t_emp
    WHERE depetid = 10;
#5:查询雇员表中工资总和条件部门编号等于10
    SELECT sum(salary) FROM t_emp
    WHERE depetid = 10;
#6:查询雇员表中(工资和生日)条件姓名等于tom
    SELECT salary,birthday
    FROM t_emp
    WHERE ename = 'tom1';
#7:查询雇员表中(数量)条件工资大于12000
   SELECT count(id)
   FROM t_emp
   WHERE salary > 12000;
#8:查询雇员表中所有信息条件生日(2000年之前)
   a:添加记录今天生
   INSERT INTO t_emp VALUES
   (10,'kk','F',11000,now(),10);
   b:查询
   SELECT * FROM t_emp
   WHERE birthday < '2000-01-01';
#9:查询雇员表中所有信息条件部门是财务部account
   
#10:查询财务部平均工资
   ?财务部数据保存 account 在 t_dept(dname)
   ?工资数据保存   salary  在 t_emp();
   1:SELECT id FROM t_dept 
     WHERE dname='account';
   2:SELECT avg(salary) FROM t_emp
     WHERE  depetid = 10;

   合并
     SELECT avg(salary) FROM t_emp
     WHERE depetid = (SELECT id FROM t_dept
     WHERE dname = 'account');
#11:查询财务部性别等于F所有员工信息
     SELECT * FROM t_emp
     WHERE depetid = (SELECT id FROM t_dept
     WHERE dname = 'account')
     AND sex = 'F';
#12:查询财务部姓名以t开头的所有员工信息
   ** like 模糊查询  % 0个或多个字符
     SELECT * FROM t_emp
     WHERE depetid = (SELECT id FROM t_dept
     WHERE dname = 'account')
     AND   ename like 't%';
#13:查询姓名等于tom员工数量
     SELECT count(id)
     FROM t_emp
     WHERE ename = 'tom';



