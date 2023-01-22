<?php

namespace App\Http\Requests;

use App\Models\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('user_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'jabatan' => [
                'string',
                'required',
            ],
            'instansi' => [
                'string',
                'required',
            ],
            'jenis_instansi' => [
                'required',
            ],
            'alamat_instansi' => [
                'required',
            ],
            'pendidikan_terakhir' => [
                'required',
            ],
            'email' => [
                'required',
                Rule::unique('users')->whereNull('deleted_at'),
            ],
            'roles.*' => [
                'integer',
            ],
            'roles' => [
                'required',
                'array',
            ],
        ];
    }
}
