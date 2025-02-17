<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vouchers')->delete();
        DB::table('vouchers')->truncate();
        DB::table('vouchers')->insert([
            'ma_code'      => 'ABC123',
        'thoi_gian_bat_dau'      => '2024-12-17',
        'thoi_gian_ket_thuc'      => '2025-12-19',
        'loai_giam'      => 1,
        'so_gia_giam'  => '20',
        'so_tien_doi_da'      => '50000',
        'don_gia_doi_thieu'      => '200000',
        'tinh_trang'      => true,
        ]);
    }
}
