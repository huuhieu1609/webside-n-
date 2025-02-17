<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DanhMucRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id'         => 'required|exists:danh_mucs,id',
            'ten_danh_muc' => '|min:5|max:30|required|unique:danh_mucs,ma_code,' . $this->id,
            'mo_ta' => 'required',
            'tinh_trang' => 'required',
            // 'ten_danh_muc'  =>$request->ten_danh_muc,
            // 'mo_ta'  =>$request->mo_ta,
            // 'tinh_trang'  =>$request->tinh_trang,
        ];
    }
    public function messages()
    {
        return [

        ];
    }
}
