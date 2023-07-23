<?php

namespace App\Http\Requests;

use App\Models\Navigation;
use Illuminate\Foundation\Http\FormRequest;

class NavigationStoreRequest extends FormRequest
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
            'navigationName' => ['required', 'string', 'max:255', 'min:2', 'unique:'.Navigation::class],
            'uri' => ['required', 'string', 'max:255', 'min:2'],
            'page_id' => ['required', 'exists:pages,id']
        ];
    }
}
