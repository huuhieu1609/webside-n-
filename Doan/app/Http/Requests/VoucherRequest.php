<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VoucherRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }



    public function rules(): array
    {
        return [
            'id'         => 'required|exists:Vouchers,id',
            'ma_code' => '|min:5|max:30|required|unique:Vouchers,ma_code,' . $this->id,
            'thoi_gian_bat_dau' => 'required',
            'thoi_gian_ket_thuc' => 'required',
            'loai_giam' => 'required',
            'so_gia_giam' => 'required',
            'so_tien_doi_da'      => 'required',
            'don_gia_doi_thieu'      => 'required',
            'tinh_trang'      => 'required',
            //         'ma_code'      => 'ABC123',
            // 'thoi_gian_bat_dau'      => '2024-12-17',
            // 'thoi_gian_ket_thuc'      => '2025-12-19',
            // 'loai_giam'      => 1,
            // 'so_gia_giam'  => '20',
            // 'so_tien_doi_da'      => '50000',
            // 'don_gia_doi_thieu'      => '200000',
            // 'tinh_trang'      => true,
        ];
    }
    public function messages()
    {
        return [
            'ma_code' => 'Chưa nhập thông tin',
            'thoi_gian_bat_dau' => 'Chưa nhập thông tin',
            'thoi_gian_ket_thuc' => 'Chưa nhập thông tin',
            'loai_giam' => 'Chưa nhập thông tin',
            'so_gia_giam' => 'Chưa nhập thông tin',
            'so_tien_doi_da'      => 'Chưa nhập thông tin',
            'don_gia_doi_thieu'      => 'Chưa nhập thông tin',
            'tinh_trang'      => 'Chưa nhập thông tin',
        ];
    }
}
