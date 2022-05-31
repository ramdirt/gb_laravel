<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'phone' => ['required', 'integer', 'min:7'],
            'email' => ['required', 'string', 'regex:/^.+@.+$/i'],
            'order' => ['required', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Поле :attribute пустое',
            'string' => 'Поле :attribute принимает только буквы',
            'integer' => 'Поле :attribute должно содержать цифры',
            'regex' => 'Поле :attribute должно содержать шаблон по типу mail@mail.ru'
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'имя',
            'phone' => 'телефон',
            'email' => 'эл. почта',
            'order' => 'заказ'
        ];
    }
}