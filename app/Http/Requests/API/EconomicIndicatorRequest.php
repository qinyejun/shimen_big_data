<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class EconomicIndicatorRequest extends FormRequest
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
            'period' => 'required',
            'time' => 'required'
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
            'period.required' => '记录周期不能为空',
            'time.required' => '时间不能为空'
        ];
    }
}
