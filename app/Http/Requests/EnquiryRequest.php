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
            'email' => 'required|email',
            'mobile' => 'required|numeric|digits:10',
            // 'business_name' => 'required',
            // 'website' => 'required',
            'message' => 'required',
            // 'services' => 'required',
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
