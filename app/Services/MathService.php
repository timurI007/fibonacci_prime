<?php

namespace App\Services;

use App\Exceptions\InvalidMathArgumentException;

class MathService
{
    public function fibonacci(int $position): int
    {
        if ($position < 0) {
            return new InvalidMathArgumentException();
        }

        if ($position < 2) {
            return $position;
        }

        $result = 0;
        for ($i = $position-2; $i < $position; $i++) {
            $result += $this->fibonacci($i);
        }

        return $result;
    }

    public function isPrime(int $number): bool
    {
        if ($number < 0) {
            return new InvalidMathArgumentException();
        }

        if ($number < 2) {
            return false;
        }

        for ($i = 2; $i < $number; $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }

        return true;
    }
}