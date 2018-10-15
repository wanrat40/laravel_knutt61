<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => array(
                'required',
                'regex:/(^[a-zA-Z].*[a-zA-Z\d]+$)/',
                'min:3',
                'max:255'
            ),
            'body' => 'required',
            'published_at' => 'required|date'
        ];
    }

    public function messages(){
        return [
            'required'=>'You have to enter some data to :attribute',
            'title.required'=>'Please enter the title of this article' ];
    }
}
