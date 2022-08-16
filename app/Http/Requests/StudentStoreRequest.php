<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Имя'=>'max:255',
            'Адрес'=>'max:255',
            'Телефон'=>'max:255',
            'Номер_зачетки'=>'max:255',
            'Средняя_успеваемость'=>'max:255',

        ];
    }
}
