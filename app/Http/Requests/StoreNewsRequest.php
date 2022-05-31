<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
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
            'category_id' => ['required', 'integer'],
            'title'       => ['required', 'string', 'min:3', 'max:255'],
            'status'      => ['required', 'string'],
            'author'      => ['required', 'string'],
            'image'       => ['nullable', 'image', 'mimes:png,jpg,jpeg'],
            'description' => ['nullable', 'string']
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Поле :attribute нужно заполнить',
            'integer' => 'Поле :attribute принимает только цифры',
            'string' => 'Поле :attribute принимает только буквы',
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'заголовок',
            'author' => 'автор',
            'status' => 'статус',
            'category_id' => 'id категории',
            'image' => 'изображение',
            'description' => 'описание   '
        ];
    }
}
