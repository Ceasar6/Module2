
<?php
include "Employee/Employee.php";
include "EmployeeManager/EmployeeManager.php";

use EmployeeManager\EmployeeManager;
use Employee\Employee;


$appManager = new EmployeeManager();
$employee01 = new Employee('John', 'Wick', '01/01/1980', 'NY', 'boss');
$employee02 = new Employee('Hulk', 'Green', '01/01/1982', 'LAL', 'coach');

$appManager->addEmployee($employee01);
$appManager->addEmployee($employee02);


$list = $appManager->getListEmployee();
var_dump($list);
?>