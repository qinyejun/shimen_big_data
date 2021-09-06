<?php

namespace App\Http\Requests\Permission;

use Illuminate\Foundation\Http\FormRequest;

class InsertRequest extends FormRequest
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
            'name' => 'required',
            'is_root' => 'required',
            'type' => 'required'
        ];
    }

    /**
     * 自定义错误消息
     */
    public function messages(){
        return [
            'name.required' => '节点名称不能为空',
            'is_root.required' => '是否根目录不能为空',
            'type.required' => '权限类型不能为空'
        ];
    }
}
