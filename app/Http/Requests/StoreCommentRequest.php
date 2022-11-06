<?php

namespace App\Http\Requests;

use App\Models\Comment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCommentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('comment_create');
    }

    public function rules()
    {
        return [
            'content_page_id' => [
                'required',
                'integer',
            ],
            'user_id' => [
                'required',
                'integer',
            ],
            'comment' => [
                'string',
                'required',
            ],
        ];
    }
}
