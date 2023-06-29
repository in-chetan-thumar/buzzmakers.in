<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'phone' => 'required',
            'website' => 'required',
            'project' => 'required',
            'budget' => 'required|numeric',
//            'range2' => 'required',
            'services' => 'required',
            'competitors' => 'required',
            'reference' => 'required',
            'documents' => 'nullable|mimetypes:application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document',
//            'schedule_date' => 'required',
//            'timezone' => 'required',
//            'schedule_time' => 'required',
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
