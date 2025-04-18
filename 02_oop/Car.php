<?php

class Car
{
    protected string $model;
    private int $horsepower;
    private int $year;

    public function __construct(string $model, int $horsepower, int $year)
    {
        $this->model = $model;
        $this->horsepower = $horsepower;
        $this->year = $year;
    }

    public function show(): void
    {
        $price = $this->getPrice($this->model, $this->horsepower, $this->year);
        echo "
            <div style='padding: 20px; background: bisque; font-family: C059'>
                <h2>$this->model</h2>
                <p>Horsepower: $this->horsepower</p>
                <p>Year: $this->year</p>
                <h4>Price - $price$ </h4>
            </div>
        ";
    }

    public static function getPrice(string $model, int $horsepower, int $year): int
    {
        return $horsepower * 12 / $year * 1000;
    }

    public static function staticMethod(): string
    {
        return 'Some text by method';
    }

}