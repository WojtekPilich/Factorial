<?php

class FactorialTest extends PHPUnit\Framework\TestCase
{
    public function testResultOfFactorialRecursiveFunction()
    {
        $testFactorial1 = new \App\Factorial();
        $this->assertEquals($testFactorial1->recursive(3), 6); // passed
        $this->assertEquals($testFactorial1->recursive(9), 3628800); // failed, result is for number 10
    }

    public function testResultOfFactorialNonRecursiveFunction()
    {
        $testFactorial2 = new \App\Factorial();
        $this->assertEquals($testFactorial2->non_recursive(5), 120); // passed
        $this->assertEquals($testFactorial2->non_recursive(4), 20); // failed, result should be 24
    }
}