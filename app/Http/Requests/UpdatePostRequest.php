<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'title' => 'required|min:5',
            'body' => 'required',
            'summary' => 'required|string|max:50',
            'status' => 'required|in:draft,published,archived,pending',
            'reading_time' => 'required|integer|min:1',
            'published_at' => 'nullable|date',
        ];
    }
}
