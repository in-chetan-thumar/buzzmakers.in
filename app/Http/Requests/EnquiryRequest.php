<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnquiryRequest extends FormRequest
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
            'name' => 'required',
            'surname' => 'required',
            'mobile' => 'required|numeric',
            'business_name' => 'required',
            'website' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',

        ];
    }
    public function messages()
    {
        return [
            'g-recaptcha-response.captcha' => 'Captcha verification failed',
            'g-recaptcha-response.required' => 'Please complete the captcha'
        ];
    }
}
