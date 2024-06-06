<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckOTPRequest extends FormRequest
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
            'otp' => 'required|min:6|max:6'
        ];
    }
    public function messages()
    {
        return [
            'otp.min' => 'Mật khẩu tối thiểu 8 kí tự',
            'otp.max' => 'Mật khẩu tối đa 16 kí tự',
            'otp.required' => 'Hãy nhập mã OTP'
        ];
    }
}
