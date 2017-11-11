<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class EditAdmin extends Request
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
      $id = Auth::user()->id;
      return [
        'name' => 'required|max:255',
        'email'  =>  'required|email|max:255|unique:users,email,'.$id,
        'password' => 'min:6|confirmed',
      ];
    }
}
