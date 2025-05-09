<?php

namespace App\Http\Requests\Admin;

use App\Traits\ApiValidationTrait;
use Illuminate\Foundation\Http\FormRequest;

class AdvertisementRequest extends FormRequest
{
    use ApiValidationTrait;
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
           'image' => 'required:max:255:jpeg,png,jpg,gif,svg'
        ];
    }
}
