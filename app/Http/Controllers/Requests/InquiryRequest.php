<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InquiryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * バリデーションルールを定義
     *
     * @return array
     */
    public function rules(): array
    {
        return [
          'title' => ['required', 'max:30'],
          'email' => ['required'],
        ];
    }

    /**
     * バリデーションエラーメッセージを定義
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'title.required'  => 'タイトルは必須項目です。',
            'title.max'       => 'タイトルは30文字以下で入力してください。',
            'message.required' => '内容は必須項目です。'
          ];
    }
}