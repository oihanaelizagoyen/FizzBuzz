<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private FizzBuzz $fizzbuzz;

    /**
     * @setUp
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->fizzbuzz = new FizzBuzz();
    }

    /**
     * @test
     */
    public function given_1_returns_1()
    {
        $result = $this->fizzbuzz->calculate(1);

        $this->assertEquals('1', $result);
    }

    /**
     * @test
     */
    public function given_2_returns_2()
    {
        $result = $this->fizzbuzz->calculate(2);

        $this->assertEquals('2', $result);
    }

    /**
     * @test
     */
    public function given_3_returns_fizz()
    {
        $result = $this->fizzbuzz->calculate(3);

        $this->assertEquals('fizz', $result);
    }

    /**
     * @test
     */
    public function given_4_returns_4()
    {
        $result = $this->fizzbuzz->calculate(4);

        $this->assertEquals('4', $result);
    }

    /**
     * @test
     */
    public function given_5_returns_buzz()
    {
        $result = $this->fizzbuzz->calculate(5);

        $this->assertEquals('buzz', $result);
    }

    /**
     * @test
     */
    public function given_15_returns_fizzbuzz()
    {
        $result = $this->fizzbuzz->calculate(15);

        $this->assertEquals('fizzbuzz', $result);
    }

    /**
     * @test
     */
    public function given_30_returns_fizzbuzz()
    {
        $result = $this->fizzbuzz->calculate(30);

        $this->assertEquals('fizzbuzz', $result);
    }

    /**
     * @test
     */
    public function given_31_returns_fizz()
    {
        $result = $this->fizzbuzz->calculate(31);

        $this->assertEquals('fizz', $result);
    }

    /**
     * @test
     */
    public function given_35_returns_fizzbuzz()
    {
        $result = $this->fizzbuzz->calculate(35);

        $this->assertEquals('fizzbuzz', $result);
    }

    /**
     * @test
     */
    public function given_41_returns_41()
    {
        $result = $this->fizzbuzz->calculate(41);

        $this->assertEquals('41', $result);
    }

    /**
     * @test
     */
    public function given_50_returns_buzz()
    {
        $result = $this->fizzbuzz->calculate(50);

        $this->assertEquals('buzz', $result);
    }
}
