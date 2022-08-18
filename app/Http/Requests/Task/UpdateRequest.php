<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'title' => 'required|string',
           'content' => 'string',
           'category_id' => 'required|integer|exists:categories,id',
           'status_id' => 'required|integer|exists:statuses,id',
           'importance' => 'nullable|numeric'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо заполнить',
            'title.string' => 'Название должно быть строкой',
            'content.required' => 'Это поле необходимо заполнить',
            'content.string' => 'Название должно быть строкой',
            'category_id.required' => 'Это поле необходимо заполнить',
            'category_id.required' => 'Должно быть целое число',
            'category_id.exists' => 'Категория должна существовать',
            'status.required' => 'Это поле необходимо заполнить',
            'status.exists' => 'Статус должен существовать',
            'importance.numeric' => 'Должно быть целое число',
        ];
    }
}
