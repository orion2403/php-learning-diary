<?php

require_once 'Employee.php';

class Finder extends Employee
{
    public static function findByEmail(string $email): array
    {
        foreach (self::$employees as $employee) {
            if ($employee['email'] == $email) {
                return $employee;
            }
        }
        return [];
    }
}
