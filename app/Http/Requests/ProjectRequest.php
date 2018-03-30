<?php

namespace App\Http\Requests;

class ProjectRequest extends Request
{
    public function rules()
    {
        switch ($this->method()) {
            // CREATE
            case 'POST':
                {
                    return [
                        'name' => 'required|min:2|unique:projects,name',
                        'summary' => 'required|min:5',
                        'user_id' => 'required',
                        'accept' => 'required',
                    ];
                }
            // UPDATE
            case 'PUT':
            case 'PATCH':
                {
                    return [
                        'name' => 'required|min:2',
                        'summary' => 'required|min:5',
                        'user_id' => 'required',
                    ];
                }
            case 'GET':
            case 'DELETE':
            default:
                {
                    return [];
                };
        }
    }

    public function messages()
    {
        return [
            'summary.min' => '简介 至少为5个字符',
            'summary.required' => '简介 不能为空',
        ];
    }
}
