<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productrequest extends FormRequest
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
            //
        'name'=>'required|string',
        'description'=>'required|string',
        'image'=>'required',
        'author'=>'required',
        'price'=>'required|numeric',
        'discount'=>'required|numeric',
        'price_after_discount'=>'required|numeric',
        'status'=>'required',
        'stock'=>'required|numeric',
        'number_of_pages'=>'required|numeric',
        'code'=>'required',
        'category_id'=>'required|exists:categories,id',
        'created_at'=>'required',
        'updated_at'=>'required',
        ];
    }
}
