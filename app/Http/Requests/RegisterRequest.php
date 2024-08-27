<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:4|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:16',
            'phone_number' => 'required|digits:11',
        ];
    }


    public function messages(): array 
    {
        return [
            'name.required' => 'Please enter your name' ,
            'name.min' => 'Name must be atleast 4 chars long',
            'name.max' => 'Name must not be more than 100 chars',
            'email.required' => 'Please enter your email address' ,
            'email.email' => 'Email must be a valid email address' ,
            'email.unique' => 'Email is already taken. Please try with another email address',
            'password.required' => 'Please enter your password',
            'password.min' => 'Password must be atleast 8 chars long',
            'password.max' => 'Password must not be more than 16 chars',
            'phone_number.required' => 'Please enter your phone number',
            'phone_number.digits' => 'Phone number must be 11 digits number',
        ];
    
    }
}
