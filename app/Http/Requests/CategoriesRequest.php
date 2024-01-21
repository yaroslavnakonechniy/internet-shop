<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriesRequest extends FormRequest
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
            'code' => 'required|unique:categories,code',
            'description' => 'required'
        ];

        if($this->route()->named('categories.update')){
            $rule['code'] .= ','. $this->route()->parameter('category')->id;

        }

        return $rule;
    }

    public function messages(){
        return [
            'required' => 'Поле :attribute обовязкове',
            'description.required' => 'Поле опис категорії обовязкове',
            'code.required' => 'Поле код обовязкове',
            'code.unique' => 'Таке поле вже існує, виберіть інше'
        ];
    }
}
