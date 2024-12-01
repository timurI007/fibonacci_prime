<?php

namespace App\DataTransferObjects\Math;

class MathResponseDTO
{
    public function __construct(
        public mixed $result = null,
        public ?string $error = null
    ) {}

    public function toArray(): array
    {
        return [
            'result' => $this->result,
            'error' => $this->error,
        ];
    }
}