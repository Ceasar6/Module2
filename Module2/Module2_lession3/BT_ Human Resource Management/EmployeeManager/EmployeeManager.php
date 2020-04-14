<?php
namespace EmployeeManager;
class EmployeeManager
{
    protected static $listEmployee = [];

    /**
     * @return array
     */
    public function getListEmployee()
    {
        return self::$listEmployee;
    }


    public function addEmployee($employee)
    {
        array_push(self::$listEmployee, $employee);
    }

    public function isEmployeeInList($employee)
    {
        foreach (self::$listEmployee as $item) {
            if ($item == $employee) {
                return true;
            }
        }
        return false;
    }

    public function getEmployeeByIndex($index)
    {
        $list = self::getListEmployee();
        return $list[$index];
    }

    public function deleteEmployee($index)
    {
        unset(self::$listEmployee[$index]);
    }

    public function updateInfo($index, $newEmployee)
    {
        array_splice(self::getListEmployee(), $index, $newEmployee);
    }
}