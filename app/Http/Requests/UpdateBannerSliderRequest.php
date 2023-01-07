<?php

namespace App\Http\Requests;

use App\Models\Event;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBannerSliderRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('banner_slider_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'text' => [
                'required',
            ]
        ];
    }
}
