<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetFibonacciRequest;
use App\Http\Requests\GetIsPrimeRequest;
use InvalidArgumentException;

class MathController extends Controller
{
    public function fibonacci(GetFibonacciRequest $request)
    {
        $result = [];

        try {
            $result['result'] = $request->resolve();
        } catch (InvalidArgumentException $e) {
            $result['error'] = $e->getMessage();
        } catch (\Exception $e) {
            $result['error'] = 'Something went wrong :(';
        }

        return response()->json($result);
    }

    public function isPrime(GetIsPrimeRequest $request)
    {
        $result = [];

        try {
            $result['result'] = $request->resolve();
        } catch (InvalidArgumentException $e) {
            $result['error'] = $e->getMessage();
        } catch (\Exception $e) {
            $result['error'] = 'Something went wrong :(';
        }

        return response()->json($result);
    }
}
