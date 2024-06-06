<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
            'img-input' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'img-input.required' => 'Hình ảnh là bắt buộc',
            'img-input.image' => 'File tải lên phải là hình ảnh',
            'img-input.mimes' => 'File hình ảnh không đúng định dạng',
        ];
    }
}
