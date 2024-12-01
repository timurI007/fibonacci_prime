<?php

namespace App\DataTransferObjects\Math;

use App\Http\Requests\GetFibonacciRequest;

class FibonacciDTO
{
    public function __construct(
        public int $position
    ) {}

    public static function fromRequest(GetFibonacciRequest $request): self
    {
        return new self($request->validated()['position']);
    }
}