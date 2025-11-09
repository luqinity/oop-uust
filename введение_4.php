<?php

class OddEvenSeparator
{
    private array $numbers = [];

    public function add_number(int $num)
    {
        $this->numbers[] = $num;
    }

    public function even(): array
    {
        return array_filter($this->numbers, fn($num) => $num % 2 === 0);
    }

    public function odd(): array
    {
        return array_filter($this->numbers, fn($num) => $num % 2 !== 0);
    }
}