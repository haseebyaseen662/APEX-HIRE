<?php

namespace App\Http\Requests\Auth;

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
        $rules = [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'account_type' => ['required', 'string', 'in:seeker,employer'],
        ];

        if($this->input('account_type') === 'employer') {
            $rules['company_name'] = ['required', 'string', 'max:255'];
            $rules['company_logo'] = ['nullable', 'image', 'max:2048'];
            $rules['industry'] = ['required', 'string', 'max:255'];
            $rules['company_size'] = ['required', 'string', 'max:255'];
            $rules['employer_location'] = ['required', 'string', 'max:500'];
        }
        else {
            $rules['resume'] = ['nullable', 'file', 'mimes:pdf', 'max:5120'];
            $rules['job_title'] = ['required', 'string', 'max:255'];
            $rules['seeker_location'] = ['required', 'string', 'max:500'];
        }

        return $rules;
    }
}
