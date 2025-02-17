<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhSachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('danh_saches')->delete();
        DB::table('danh_saches')->truncate();
        DB::table('danh_saches')->insert([
            'ho_va_ten'       =>'Trần Hữu hiếu',
            'email'       =>'Huuhieutt12.1@gmail.com',
            'so_dien_thoai'       =>'0342211914',
            'ngay_sinh'       =>'16-09-2004',
            'tinh_trang'       =>'hiển thị',
            'kich_hoat'       =>'Đã Kích Hoạt',
        ]);
    }
}
