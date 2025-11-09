<?php

class Selector
{
    private array $values;

    public function __construct(array $values)
    {
        $this->values = $values;
    }

    public function get_evens(): array
    {
        return array_filter($this->values, fn($value) => $value % 2 === 0);
    }

    public function get_odds(): array
    {
        return array_filter($this->values, fn($value) => $value % 2 !== 0);
    }
}