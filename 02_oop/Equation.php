<?php

class Equation
{
    private int $a;
    private int $b;
    private int $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getResult(): array
    {
        return [
            'd' => $this->getDescriminant(),
            'x1' => $this->getFirstRoot(),
            'x2' => $this->getSecondRoot(),
        ];
    }

    private function getDescriminant(): float
    {
        return $this->b ** 2 - 4 * $this->a * $this->c;
    }

    private function getFirstRoot(): float
    {
        return (-$this->b - sqrt($this->getDescriminant())) / (2 * $this->a);
    }

    private function getSecondRoot(): float
    {
        return (-$this->b + sqrt($this->getDescriminant())) / (2 * $this->a);
    }
}