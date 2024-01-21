<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rule = [
            'name' => 'required',
            'code' => 'required|unique:products,code',
            'description' => 'required',
            'price' => 'required|numeric'
        ];

        if($this->route()->named('products.update')){
            $rule['code'] .= ','. $this->route()->parameter('product')->id;
        }

        return $rule;
    }
}
