<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMovieRequest extends FormRequest
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
            'title' => 'required|string|unique:movies',
            'director' =>'required|string',
            'imageUrl' => 'url',
            'duration'=>'required|integer|between:1,500',
            'releaseDate' => 'required|unique:movies',
            'genre' => 'string'
        ];
    }
}
