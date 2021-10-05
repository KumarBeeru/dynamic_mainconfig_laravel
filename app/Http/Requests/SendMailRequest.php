<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendMailRequest extends FormRequest
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

            "to_mail" => "required|email",
            "subject" => "required|string",
            "content" => "required|string"
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            "to_mail" => "To Mail",
            "subject" => "Subject",
            "content" => "Content"
        ];
    }
}
