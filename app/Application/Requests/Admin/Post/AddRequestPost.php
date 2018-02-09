<?php

namespace App\Application\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class AddRequestPost extends FormRequest
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
            "title" => "",
			"t.*" => "",
			"image" => "",
			"photo.*" => "",
			"file" => "",
			"files.*" => "",
			"date" => "",
			"icon" => "",
			"url" => "",
			"lng" => "",
			"lat" => "",
			"youtube" => "",
			"active" => "",
			
        ];
    }
}