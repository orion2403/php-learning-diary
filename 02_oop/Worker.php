<?php

class Worker
{
    private static array $workers = [];

    public static function save(array $worker): void
    {
        $currentDatetime = date('d-m-Y H-i');
        $worker['registerTime'] = $currentDatetime;
        self::$workers[] = $worker;
    }

    public static function getAll(): array
    {
        $workers = self::$workers;
        return [
            'workersCount' => count($workers),
            'allWorkers' => $workers,
        ];
    }

    public static function saveToFile(): void
    {
        $file = fopen('workers.txt', 'w');
        foreach (self::$workers as $worker) {
            $data = "Name: {$worker['name']}
Email: {$worker['email']}
Age: {$worker['age']}
Profession: {$worker['profession']}\n" . str_repeat('-', 120) . "\n";
            fwrite($file, $data);
        }
        fclose($file);
    }

}
