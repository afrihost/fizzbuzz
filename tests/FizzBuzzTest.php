<?php

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var FizzBuzz
     */
    protected $fizzBuzz;

    public function setUp()
    {
        $this->fizzBuzz = new FizzBuzz;
    }

    public function testGetResultWithInputDivisibleByThree()
    {
        $result = $this->fizzBuzz->getResult(3);

        $this->assertEquals('Fizz', $result);
    }

    public function testGetResultWithInputDivisibleByFive()
    {
        $result = $this->fizzBuzz->getResult(5);

        $this->assertEquals('Buzz', $result);
    }

    public function testGetResultWithInputDivisibleByBoth()
    {
        $result = $this->fizzBuzz->getResult(15);

        $this->assertEquals('FizzBuzz', $result);
    }

    public function testGetResultWithInputDivisibleByNeither()
    {
        $result = $this->fizzBuzz->getResult(1);

        $this->assertEquals('1', $result);
    }
}