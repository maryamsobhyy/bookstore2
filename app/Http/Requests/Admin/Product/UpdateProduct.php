<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProduct extends FormRequest
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
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'author' => ['required', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'discount' => ['required', 'numeric', 'min:0', 'max:100'],
            'number_of_pages' => ['required', 'numeric', 'min:0'],
            'stock' => ['required', 'numeric', 'min:0'],
            'category_id' => ['required', 'exists:categories,id'],
            'status' => ['required', 'in:0,1'],
            'image' => ['image', 'mimes:png,jpg,jpeg,gif', 'mimetypes:image/jpeg,image/png']
        ];
    }
}
