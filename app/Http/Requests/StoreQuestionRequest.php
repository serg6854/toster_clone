<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionRequest extends FormRequest
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
            'title' => ['required', 'min:3'],
            'body'  => ['required', 'min:30'],
            'tags'  => ['required'],
        ];
    }

    protected function validationData()
    {
        $all = parent::all();

        $all['tags'] = explode(',', $all['tags']);

        return $all;
    }
}
