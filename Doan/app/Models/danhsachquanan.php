<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class danhsachquanan extends Model
{
    protected $table = 'danhsachquanans';
    protected $fillable = [
        'ten_quan_an',
        'email',
        'so_dien_thoai',
        'chi_tiet',
        'trang_thai',
        'kich_hoat',
    ];
}
