<?php

class Balance
{
    private int $left = 0;
    private int $right = 0;

    public function add_right(int $num)
    {
        $this->right += $num;
    }

    public function add_left(int $num)
    {
        $this->left += $num;
    }

    public function result()
    {
        if ($this->right > $this->left) {
            return "R";
        } elseif ($this->left > $this->right) {
            return "L";
        } else {
            return "=";
        }
    }
}
