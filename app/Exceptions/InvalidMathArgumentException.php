<?php

namespace App\Exceptions;

use App\DataTransferObjects\Math\MathResponseDTO;
use App\Http\Resources\MathResultResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvalidMathArgumentException extends \Exception
{
    public function render(Request $request): JsonResource
    {
        $response = new MathResponseDTO(
            error: $this->getMessage()
        );

        return new MathResultResource($response);
    }
}