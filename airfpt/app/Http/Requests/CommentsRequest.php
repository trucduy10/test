<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentsRequest extends FormRequest
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
            'comment' => 'required|max:300',
           

            
        ];
    }
    public function messages() {
        return [
     
            'comment.required' => 'comment is required',
            'comment.max' => 'Maximum of comment is 200 characters',
            
        ];
        
    }
}
