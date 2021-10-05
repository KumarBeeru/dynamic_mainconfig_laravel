<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SmtpConfigRequest extends FormRequest
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
            "site_name" => "required|string",
            "smtp_driver" => "required|string",
            "smtp_host" => "required|string",
            "smtp_port" => "required|string",
            "username" => "required|string",
            "password" => "required|string",
            "from_name" => "required|string",
            "encription" => "required|string",
            "from_mail" => "required|email"
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [

            "site_name" => "Site Name",
            "smtp_driver" => "SMTP Driver",
            "smtp_host" => "SMTP Host",
            "smtp_port" => "SMTP Port",
            "username" => "Username",
            "password" => "Password",
            "from_name" => "From name",
            "encription" => "Encryption",
            "from_mail" => "From Mail"
        ];
    }
}
