<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table = 'Vouchers';
    protected $fillable = [
        'ma_code',
        'thoi_gian_bat_dau',
        'thoi_gian_ket_thuc',
        'loai_giam',
        'so_gia_giam',
        'so_tien_doi_da',
        'don_gia_doi_thieu',
        'tinh_trang',
    ];
}
