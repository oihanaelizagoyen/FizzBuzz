<?php

namespace Deg540\PHPTestingBoilerplate;

class PrimeFactors
{

    public function calculatePrimeFactors (int $numberToFactor): array
    {
        $result = array();
        $actualNumber = $numberToFactor;

        while($actualNumber !== 1){
            $newPrimeFactor = $this->calculateFirstPrimeFactor($actualNumber);
            $actualNumber = $actualNumber/$newPrimeFactor;
            $result[] = $newPrimeFactor;
        }

        return ($result);

    }

    private function calculateFirstPrimeFactor(int $number): int
    {
        $rest = -1;
        $possiblePrimeFactor = 1;

        while($rest !== 0){
            $possiblePrimeFactor++;
            $rest = $number%$possiblePrimeFactor;
        }

        return ($possiblePrimeFactor);
    }
}