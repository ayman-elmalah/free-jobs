<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddJob extends Request
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
          'title' => 'required|max:255',
          'company_name' => 'required|max:255',
          'experience' => 'required',
          'location' => 'required',
          'category' => 'required',
          'email_address' => 'required|email',
          'description' => 'required',
        ];
    }
}
