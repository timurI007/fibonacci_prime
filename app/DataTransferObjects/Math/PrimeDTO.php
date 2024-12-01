<?php

namespace App\DataTransferObjects\Math;

use App\Http\Requests\GetIsPrimeRequest;

class PrimeDTO
{
    public function __construct(
        public int $number
    ) {}

    public static function fromRequest(GetIsPrimeRequest $request): self
    {
        return new self($request->validated()['number']);
    }
}