<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    private PrimeFactors $primeFactors;

    /**
     * @setUp
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->primeFactors = new PrimeFactors();
    }

    /**
     * @test
     */
    public function given_15_returns_3_5()
    {
        $expected = array(3, 5);

        $result = $this->primeFactors->calculatePrimeFactors(15);

        $this->assertEqualsCanonicalizing($expected, $result);
    }

    /**
     * @test
     */
    public function given_16_returns_2_2_2_2()
    {
        $expected = array(2, 2, 2, 2);

        $result = $this->primeFactors->calculatePrimeFactors(16);

        $this->assertEqualsCanonicalizing($expected, $result);
    }

    /**
     * @test
     */
    public function given_17_returns_17()
    {
        $expected = array(17);

        $result = $this->primeFactors->calculatePrimeFactors(17);

        $this->assertEqualsCanonicalizing($expected, $result);
    }

    /**
     * @test
     */
    public function given_18_returns_2_3_3()
    {
        $expected = array(2, 3, 3);

        $result = $this->primeFactors->calculatePrimeFactors(18);

        $this->assertEqualsCanonicalizing($expected, $result);
    }

    /**
     * @test
     */
    public function given_2632_returns_2_2_2_7_47()
    {
        $expected = array(2, 2, 2, 7, 47);

        $result = $this->primeFactors->calculatePrimeFactors(2632);

        $this->assertEqualsCanonicalizing($expected, $result);
    }
}
