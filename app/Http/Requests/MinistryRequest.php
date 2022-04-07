<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MinistryRequest extends FormRequest
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
            'details'=>'required|min:30|max:300',
            'name'=>'required|min:4',
            'address'=>'required|min:4',
            'img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
