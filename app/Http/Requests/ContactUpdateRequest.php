<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class ContactUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(Request $request)
    {
        return [
            "name" => "required|min:5|max:100",
            "contact" => "required|min:9|max:9",
            "email" => "required|email|min:3|max:80|unique:contacts,email,$request->id"
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "The name field must be filled",
            "name.min" => "The name field must have at least 5 characters",
            "name.max" => "The name field must have less than 100 characters",

            "contact.required" => "The contact field must be filled",
            "contact.min" => "The contact field must have 9 characters",
            "contact.max" => "The contact field must have 9 characters",

            "email.required" => "The email address field must be filled",
            "email.email" => "The email address field must contain a valid email",
            "email.min" => "The email address field must have at least 3 characters",
            "email.max" => "The email address field must have less than 80 characters",
            "email.unique" => "The email address insert already has been registered"
        ];
    }
}
