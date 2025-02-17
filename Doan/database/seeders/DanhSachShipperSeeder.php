<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhSachShipperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('danh_sach_shippers')->delete();
        DB::table('danh_sach_shippers')->truncate();
        DB::table('danh_sach_shippers')->insert([
            'ho_va_ten'         =>'Trần Hữu Hiếu',
            'so_dien_thoai'         =>'0342211914',
            'email'         =>'huuhieutt12.1@gmail.com',
            'cmnd'         =>'1039319824',
            'dia_chi_thuong_tru'         =>'05 phước lý 5',
            'tinh_thanh'         =>'Đà Nẵng',
            'quan_huyen'         =>'Liên Chiểu',
            'toa_do_x'         =>'10.3094048',
            'toa_do_y'         =>'100.3384322',
            'trang_thai'         =>true,
            'tinh_trang'         =>true,
        ]);
    }
}
