<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'img'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'summary'=>'required|min:40|max:400',
            'experience'=>'required',
            'gy'=>'required',
            'sex'=>'required',
            'likes'=>'required|min:20',
            'dislikes'=>'required|min:20',  
            'resume'=>'mimes:doc,pdf,docx,zip',
            'phone'=>'required|min:11|max:14',
            'country'=>'required',
            
        ];
    }
}
