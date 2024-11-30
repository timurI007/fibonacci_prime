<?php

namespace App\DataTransferObjects\Math;

class FibonacciDTO
{
    public function __construct(
        public int $position
    ) {}
}