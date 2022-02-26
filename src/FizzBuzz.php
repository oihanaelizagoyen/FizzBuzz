<?php

namespace Deg540\PHPTestingBoilerplate;

class FizzBuzz
{
    public function calculate(int $numberToBeConverted): string
    {
        if ($numberToBeConverted%15 == 0 || ((strpos(strval($numberToBeConverted), '3') !== false) && (strpos(strval($numberToBeConverted), '5') !== false))){
            return 'fizzbuzz';
        }
        if ($numberToBeConverted%3 == 0 || strpos(strval($numberToBeConverted), '3') !== false){
            return 'fizz';
        }
        if ($numberToBeConverted%5 == 0 || strpos(strval($numberToBeConverted), '5') !== false){
            return 'buzz';
        }
        return strval($numberToBeConverted);
    }
}