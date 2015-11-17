<?php
namespace FizzBuzz;

class FizzBuzz
{
    /**
     * @param int $input
     * @return string
     */
    public function getResult($input)
    {
        if ($input % 3 === 0 && $input % 5 === 0) {
            return 'FizzBuzz';
        }

        if ($input % 3 === 0) {
            return 'Fizz';
        }

        if ($input % 5 === 0) {
            return 'Buzz';
        }

        return (string) $input;
    }

    public function run()
    {
        for ($i = 1; $i < 100; $i++) {
            echo $this->getResult($i) . "\r\n";
        }
    }
}