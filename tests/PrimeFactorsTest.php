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
}
