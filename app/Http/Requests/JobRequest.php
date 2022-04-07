<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            'details'=>'required|min:40|max:300',
            'requirements'=>'required|min:40|max:300',
            'title'=>'required|min:8',
            'type'=>'required',
            'location'=>'required',
            'salary'=>'required|numeric',
            'experience'=>'required',  

        ];
    }
}
