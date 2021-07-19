	/* This SQL File that will get all employees that belongs to IT Departmentv AND hired 2018 onwards .*/
	SELECT * from employees /* I simple used the "*" in my SQL Query to display all employee details from EMployee Tables.*/
	INNER JOIN departments /* I Have use an INNER JOIN to merge two data Tables to get the said output.*/
	ON employees.department_id = departments.id 
    WHERE 
    departments.department = "IT" /* I have declared here that department name should be IT.*/
    AND 						  /* I used "AND" here to get the said output.*/
    employees.date_hired >= '2018-01-01 00:00:00' /* I have also declared here that the employees are hired 2018 onwards.*/