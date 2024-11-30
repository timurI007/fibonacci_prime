<?php

namespace App\Http\Controllers;

use App\Exceptions\InvalidMathArgumentException;
use App\Http\Requests\GetFibonacciRequest;
use App\Http\Requests\GetIsPrimeRequest;
use App\Services\MathService;

class MathController extends Controller
{
    public function fibonacci(GetFibonacciRequest $request, MathService $math)
    {
        $result = [];
        $fibonacciDTO = $request->toDTO();

        try {
            $result['result'] = $math->fibonacci($fibonacciDTO->position);
        } catch (InvalidMathArgumentException $e) {
            $result['error'] = $e->getMessage();
        } catch (\Exception $e) {
            $result['error'] = 'Something went wrong :(';
        }

        return response()->json($result);
    }

    public function isPrime(GetIsPrimeRequest $request, MathService $math)
    {
        $result = [];
        $primeDTO = $request->toDTO();

        try {
            $result['result'] = $math->isPrime($primeDTO->number);
        } catch (InvalidMathArgumentException $e) {
            $result['error'] = $e->getMessage();
        } catch (\Exception $e) {
            $result['error'] = 'Something went wrong :(';
        }

        return response()->json($result);
    }
}
