<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhSachShipper extends Model
{
    protected $table = 'danh_sach_shippers';
    protected $fillable = [
        'ho_va_ten',
        'so_dien_thoai',
        'email',
        'cmnd',
        'dia_chi_thuong_tru',
        'tinh_thanh',
        'quan_huyen',
        'toa_do_x',
        'toa_do_y',
        'trang_thai',
        'tinh_trang',
    ];
}
