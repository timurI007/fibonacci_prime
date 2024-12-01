<?php

namespace App\Http\Controllers;

use App\DataTransferObjects\Math\FibonacciDTO;
use App\DataTransferObjects\Math\MathResponseDTO;
use App\DataTransferObjects\Math\PrimeDTO;
use App\Http\Requests\GetFibonacciRequest;
use App\Http\Requests\GetIsPrimeRequest;
use App\Http\Resources\MathResultResource;
use App\Services\MathService;
use Illuminate\Http\Resources\Json\JsonResource;

class MathController extends Controller
{
    public function __construct(
        private MathService $math
    ) {}

    public function fibonacci(GetFibonacciRequest $request): JsonResource
    {
        $fibonacciDTO = FibonacciDTO::fromRequest($request);

        $response = new MathResponseDTO(
            result: $this->math->fibonacci($fibonacciDTO->position)
        );

        return new MathResultResource($response);
    }

    public function isPrime(GetIsPrimeRequest $request): JsonResource
    {
        $primeDTO = PrimeDTO::fromRequest($request);

        $response = new MathResponseDTO(
            result: $this->math->isPrime($primeDTO->number)
        );

        return new MathResultResource($response);
    }
}
