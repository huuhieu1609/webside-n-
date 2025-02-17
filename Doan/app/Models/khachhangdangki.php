<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class khachhangdangki extends Model
{
   protected $table = 'khachhangdangkis';
   protected $fillable = [
            'ho_va_ten',
            'email',
            'so_dien_thoai',
            'ngay_sinh',
            'mat_khau',
            'xac_nhan_mat_khau',
   ];
}
