<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestDownload extends FormRequest
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

    public function store(FormRequestDownload $request)
{
    //
}

public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле Имя обязательно для заполнения',
            'email.required' => 'Поле Email обязательно для заполнения',
            'email.email' => 'Поле Email должно быть корректным email-адресом',
            'message.required' => 'Поле Сообщение обязательно для заполнения',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Имя',
            'email' => 'Email',
            'message' => 'Сообщение',
        ];
    }
}
