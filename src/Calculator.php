<?php

namespace Dmr\Testproject;

class Calculator
{
    protected int $result = 0;

    public function add(int ...$numbers): Calculator
    {
        $this->result = array_sum($numbers);

        return $this;
    }

    public function getResult(): int
    {
        return $this->result;
    }
}
