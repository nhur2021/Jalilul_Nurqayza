		
		/* This SQL File will get all data of employees who is in highes paid.*/
		/* I Have use an INNER JOIN to merge two data Tables to get the said output.*/
		/* Where is have declare the salary(data table) to equal to 3.*/

		SELECT * from employees 
		INNER JOIN salary
		ON employees.salary_id = salary.id
		WHERE salary.id = "3"