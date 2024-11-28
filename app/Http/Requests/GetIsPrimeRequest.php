<?php

namespace App\Http\Requests;

use App\Services\MathService;
use Illuminate\Foundation\Http\FormRequest;

class GetIsPrimeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'number' => ['required', 'integer']
        ];
    }

    public function resolve(): bool
    {
        $math = new MathService();

        return $math->isPrime($this->input('number'));
    }
}
