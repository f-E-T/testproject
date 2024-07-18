<?php

use Dmr\Testproject\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function test_add_numbers()
    {
        $calculator = new Calculator();

        $calculator->add(1, 2);

        $this->assertEquals(3, $calculator->getResult());
    }
}
