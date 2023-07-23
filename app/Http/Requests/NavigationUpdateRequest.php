<?php

namespace App\Http\Requests;

use App\Models\Navigation;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NavigationUpdateRequest extends FormRequest
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
            'navigationName' => ['required', 'string', 'max:255', 'min:2', Rule::unique(Navigation::class)->ignore($this->navigation->id)],
            'uri' => ['required', 'string', 'max:255', 'min:2'],
            'page_id' => ['required', 'exists:pages,id']
        ];
    }
}
