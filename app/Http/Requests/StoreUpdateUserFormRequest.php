<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserFormRequest extends FormRequest
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

        $id = $this->id ?? '';
        return [
           'name' => 'required|string|min:3|max:50',
           'email' => [
            'required',
            'email',
            'unique:users,email,{id},id',
           ],
           'image' => ['file'],
        ];
    }
}
