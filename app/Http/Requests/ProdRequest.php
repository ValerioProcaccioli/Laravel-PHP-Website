<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdRequest extends FormRequest
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
        return [
            'catId' => 'required',
            'discountPerc' => 'required|integer|min:0|max:100',
            'descShort' => 'required|max:30',
            'name' => 'required|max:25',
            'image' => 'image|max:1024',
            'price' => 'required|numeric|min:0',
            'discounted' => 'required',
            'descLong' => 'required|max:2500'
        ];
    }
}
