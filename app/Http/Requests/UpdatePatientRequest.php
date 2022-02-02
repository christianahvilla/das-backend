<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePatientRequest extends FormRequest
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

    /*
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:36',
            'second_name' => 'required|string|max:36',
            'last_name' => 'required|string|max:36',
            'birthday' => 'required|string|max:8',
            'street' => 'required|string|max:36',
            'street_number' => 'required|string|max:4',
            'interior_number' => 'required|string|max:4',
            'settlement' => 'required|string|max:36',
            'zip_code' => 'required|string',
            'country' => 'required|string|max:36',
            'state' => 'required|string|max:36',
            'city' => 'required|string|max:36',
            'phone_number' => 'required|string|max:36',
            'cell_number' => 'required|string|max:36',
            'email' => 'required|string|max:36',
            'kind_patient' => 'required|string|max:36',
        ];
    }
}
