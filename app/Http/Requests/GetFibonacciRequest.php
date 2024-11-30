<?php

namespace App\Http\Requests;

use App\DataTransferObjects\Math\FibonacciDTO;
use Illuminate\Foundation\Http\FormRequest;

class GetFibonacciRequest extends FormRequest
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
            'position' => ['required', 'integer']
        ];
    }

    public function toDTO(): FibonacciDTO
    {
        return new FibonacciDTO($this->validated()['position']);
    }
}
