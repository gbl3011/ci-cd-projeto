// tests/CalculatorTest.php
<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $this->assertEquals(4, $calculator->add(2, 2));
    }

    public function testSubtract()
    {
        $calculator = new Calculator();
        $this->assertEquals(0, $calculator->subtract(2, 2));
    }

    public function testMultiply()
    {
        $calculator = new Calculator();
        $this->assertEquals(6, $calculator->multiply(2, 3));
    }

    public function testDivide()
    {
        $calculator = new Calculator();
        $this->assertEquals(2, $calculator->divide(6, 3));
    }

    public function testDivideByZero()
    {
        $calculator = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->divide(6, 0);
    }
}
