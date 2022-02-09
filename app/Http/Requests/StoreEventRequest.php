<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
            'id' => 'required|string|max:36',
            'patient' => 'required|string|max:36',
            'treatment' => 'required|string|max:36',
            'start_date' => 'required|string|max:10',
            'start_hour' => 'required|string|max:5',
            'end_date' => 'required|string|max:10',
            'end_hour' => 'required|string|max:5',
            'notes' => 'string|nullable',
            'color' => 'string'
        ];
    }
}
