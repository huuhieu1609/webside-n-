<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuanlyquananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('danhsachquanans')->delete();
        DB::table('danhsachquanans')->truncate();
        DB::table('danhsachquanans')->insert([
            'ten_quan_an'          => 'Quán sky',
            'email'          => 'skyoi@gmail.com',
            'so_dien_thoai'          => '0342211914',
            'chi_tiet'          => 'chi tiết',
            'trang_thai'          => 'hiển thị',
            'kich_hoat'          => 'Đã kích Hoạt',
        ]);
    }
}
