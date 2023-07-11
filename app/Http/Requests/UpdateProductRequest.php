<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'title' => "required| min:2 | max:100",
            'description' => "nullable | min:5 | max:256",
            'imgPath' => "nullable | url",
            'link_to_project' => "nullable | url",
        ];
    }
    public function messages(){
        return [
            "title.required" => "Il titolo e obligatorio"
        ];
    }
}
