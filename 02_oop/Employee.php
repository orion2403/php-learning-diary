<?php

class Employee
{
    protected static array $employees = [];

    public static function save(array $employee): void
    {
        $currentDatetime = date('d-m-Y H-i');
        $employee['registerTime'] = $currentDatetime;
        self::$employees[] = $employee;
    }

    public static function getAll(): array
    {
        $workers = self::$employees;
        return [
            'numberOfEmployees' => count($workers),
            'allEmployees' => $workers,
        ];
    }

    public static function saveToFile(): void
    {
        $file = fopen('employees.txt', 'w');
        foreach (self::$employees as $employee) {
            $data = "Name: {$employee['name']}
Email: {$employee['email']}
Age: {$employee['age']}
Profession: {$employee['profession']}\n" . str_repeat('-', 120) . "\n";
            fwrite($file, $data);
        }
        fclose($file);
    }

}
