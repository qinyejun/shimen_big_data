<?php

namespace App\Http\Requests\Content;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required',
            'sub_title' => 'required',
            'area_id' => 'required',
            'recommend_id' => 'required',
            'detail' => 'required'
        ];
    }

    /**
     * 自定义错误信息
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'title 不能为空',
            'sub_title.required' => 'sub_title 不能为空',
            'area_id.required' => 'area_id 不能为空',
            'recommend_id.required' => 'recommend_id 不能为空',
            'detail.required' => 'detail 不能为空'
        ];
    }
}
