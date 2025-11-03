<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class TaskUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $task = $this->route('task');

        return Gate::allows('update', $task);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'min:2',
                'max:255',
            ],
            'description' => [
                'required',
                'min:2',
            ],
            'due_date' => [
                'required',
                'date',
            ],
            'category_id' => [
                'required',
                Rule::exists('categories', 'id')->where('user_id', auth()->id()),
            ],
        ];
    }
}
