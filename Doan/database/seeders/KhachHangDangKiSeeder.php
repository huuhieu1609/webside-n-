<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangDangKiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('khachhangdangkis')->delete();
        DB::table('khachhangdangkis')->truncate();
        DB::table('khachhangdangkis')->insert([
            'ho_va_ten' =>'',
            'email' =>'',
            'so_dien_thoai' =>'',
            'ngay_sinh' =>'',
            'mat_khau' =>'',
            'xac_nhan_mat_khau' =>'',
        ]);
    }
}
