<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
        $rules =  [];
        return $rules;
        $email = $this->request->get("id");
        $rules =  [
            'user_name' => ['required', 'max:100'],
            'country_id' => ['required', 'numeric'],
            'city_id' => ['required', 'numeric'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'numeric', 'digits_between:11,11'],
            // 'password' =>[ 'required'] ,
        ];

        if ($this->isMethod('POST') )
        {
            $rules['password'][] = 'required';
            $rules['email'][] = 'unique:clients';
        }
        elseif($this->isMethod('put') )
        {           
        }
        return $rules;
    }

    public $validator = null;
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $this->validator = $validator;
    }
}
