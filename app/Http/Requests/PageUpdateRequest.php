<?php

namespace App\Http\Requests;

use App\Models\Page;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PageUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'pageTitle' => ['required', 'string', 'max:50', 'min:2', Rule::unique(Page::class)->ignore($this->page->id)],
            'pageText' => ['required', 'string', 'max:555', 'min:25'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'user_id' => ['required', 'exists:users,id']
        ];
    }
}
