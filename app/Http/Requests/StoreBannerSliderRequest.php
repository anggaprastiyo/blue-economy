<?php

namespace App\Http\Requests;

use App\Models\Event;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreBannerSliderRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('banner_slider_create');
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
