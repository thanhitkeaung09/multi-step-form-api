<?php

namespace App\Http\Requests;

use App\Dto\AddOnData;
use Illuminate\Foundation\Http\FormRequest;

class AddOnDataRequest extends FormRequest
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
            // "title"=>['required'],
            // "price"=>['required'],
            // "is_choosen"=>['required']
        ];
    }

    public function payload():AddOnData
    {
        return AddOnData::of(
            [
            // 'title'=>$this->title,
            // 'price'=>$this->price,
            'is_choosen'=>$this->is_choosen
            ]
        );
    }
}
