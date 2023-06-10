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
            'range1' => 'required',
            'range2' => 'required',
            'services' => 'required',
            'competitors' => 'required',
            'reference' => 'required',
            'documents' => 'required|mimetypes:application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'schedule_date' => 'required',
            'timezone' => 'required',
            'schedule_time' => 'required',
        ];
    }
}
