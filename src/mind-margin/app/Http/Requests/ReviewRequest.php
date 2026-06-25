<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class ReviewRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */

    protected $errorBag = 'review';
    
    public function rules(): array
    {
        return [
            'score' => ['required', 'integer', 'between:1,5'],
            'title' => ['required', 'max:255', 'string'],
            'content' => ['nullable', 'string', 'max:1000'],
            'is_public' => ['required', 'boolean'],
        ];
    }

    #[Override]

    public function messages()
    {
        return [
            'score.required' => '星評価を選択してください。',
        ];
    }
    public function attributes()
    {
        return [
            'score' => '星評価',
            'title' => 'レビュータイトル',
            'content' => 'レビュー内容',
        ];
    }
}
