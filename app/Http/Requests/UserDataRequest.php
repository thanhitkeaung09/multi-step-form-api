<?php

namespace App\Http\Requests;

use App\Dto\UserData;
use Illuminate\Foundation\Http\FormRequest;

class UserDataRequest extends FormRequest
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
            "name"=>['required'],
            "email"=>['required'],
            "phone"=>['required']
        ];
    }

    public function payload():UserData
    {
        return UserData::of(
            [
                "name"=>$this->name,
                "email"=>$this->email,
                "phone"=>$this->phone
            ]
            );
    }
}
