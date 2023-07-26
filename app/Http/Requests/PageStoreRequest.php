<?php

namespace App\Http\Requests;

use App\Models\Page;
use Illuminate\Foundation\Http\FormRequest;

class PageStoreRequest extends FormRequest
{
    // public function __construct()
    // {
    //     dd(request()->image);
    // }
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
            'pageTitle' => ['required', 'string', 'max:50', 'min:2', 'unique:'.Page::class],
            'pageText' => ['required', 'string', 'max:2048', 'min:25'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'user_id' => ['required', 'exists:users,id']
        ];
    }
}
