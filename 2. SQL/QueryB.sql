/* This SQL File will get all data of employees that are hired from 2017-2018.*/
/* Where is have declare the salary(data table) to equal to 3.*/
SELECT * from employees    /* I simple used the "*" in my SQL Query to display all employee details from EMployee Tables.*/
WHERE 
date_hired>='2017-10-07 00:00:00'  /* I used this condition that data_hired>=2017.*/
AND 							   /* I used "AND" here to get the said output.*/
date_hired<='2018-08-10 00:00:00'  /* I used this condition that data_hired<=2017.*/
