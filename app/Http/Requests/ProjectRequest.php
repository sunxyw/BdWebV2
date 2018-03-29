<?php

namespace App\Http\Requests;

class ProjectRequest extends Request
{
    public function rules()
    {
        switch ($this->method()) {
            // CREATE
            case 'POST':
                // UPDATE
            case 'PUT':
            case 'PATCH':
                {
                    return [
                        'name' => 'required|min:2',
                        'body' => 'required|min:3',
                        'category_id' => 'required|numeric',
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
            'name.min' => '名称必须至少两个字符',
            'body.min' => '内容必须至少三个字符',
        ];
    }
}
