<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => ['required', 'max:30'],
            'message' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
        'title.required'  => 'タイトルは必須項目です。',
        'title.max'       => 'タイトルは30文字以下で入力してください。',
        'message.required' => '内容は必須項目です。',
        ];
    }
}
