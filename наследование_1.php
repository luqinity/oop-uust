<?php

class BaseObject
{
    protected ?float $x;
    protected ?float $y;
    protected ?float $z;

    public function __construct(float $x, float $y, float $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function get_coordinates(): array
    {
        return [$this->x, $this->y, $this->z];
    }
}

class Block extends BaseObject
{
    public function shatter(): void
    {
        $this->x = null;
        $this->y = null;
        $this->z = null;
    }
}

class Entity extends BaseObject
{
    public function move(float $x, float $y, float $z): void
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
}

class Thing extends BaseObject
{
}