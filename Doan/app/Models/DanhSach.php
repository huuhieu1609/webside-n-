<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhSach extends Model
{
    protected $table = 'danh_saches';
    protected $fillable = [
        'ho_va_ten',
        'email',
        'so_dien_thoai',
        'ngay_sinh',
        'tinh_trang',
        'kich_hoat',
    ];
}
