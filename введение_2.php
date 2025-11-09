<?php

class Button
{
    private int $count = 0;

    public function click()
    {
        $this->count++;
    }

    public function click_count()
    {
        return $this->count;
    }

    public function reset()
    {
        $this->count = 0;
    }
}