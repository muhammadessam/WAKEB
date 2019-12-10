<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UseCaseRequest extends FormRequest
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
            'name_ar'=>'required',
            'name_en'=>'required',
            'description_ar'=>'required',
            'description_en'=>'required',
            'img'=>'required',
            'challenges_ar'=>'required',
            'challenges_en'=>'required',
            'opportunities_ar'=>'required',
            'opportunities_en'=>'required',
            'whyWakeb_ar'=>'required',
            'whyWakeb_en'=>'required',
        ];
    }
}
