1. SELECT * FROM employees;
-- This command selects all columns and rows from the employees table.

2. SELECT name, salary FROM employees WHERE salary > 50000;
-- This command selects the name and salary columns of all employees with a salary greater than 50000.

3. SELECT AVG(salary) FROM employees;
-- This command calculates the average salary of all employees.

4. SELECT COUNT(*) FROM employees WHERE department_id = (SELECT id FROM departments WHERE name = 'Marketing');
-- This command counts the number of employees who work in the "Marketing" department.

5. UPDATE employees SET salary = 60000 WHERE id = 1001;
-- This command updates the salary column of the employee with an id of 1001 to 60000.

6. DELETE FROM employees WHERE salary < 30000;
-- This command deletes all employees whose salary is less than 30000.

7. SELECT * FROM departments;
-- This command selects all columns and rows from the departments table.

8. SELECT name, manager FROM departments WHERE name = 'Finance';
-- This command selects only the name and manager columns of the "Finance" department.

9. SELECT departments.name, COUNT(*) FROM employees JOIN departments ON employees.department_id = departments.id GROUP BY departments.name;
-- This command calculates the total number of employees in each department.

10. INSERT INTO departments (name, manager) VALUES ('Research', 'John Doe');
-- This command inserts a new department called "Research" with a manager named "John Doe".
