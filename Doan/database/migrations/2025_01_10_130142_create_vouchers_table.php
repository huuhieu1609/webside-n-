<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->string('ma_code');
            $table->date('thoi_gian_bat_dau');
            $table->date('thoi_gian_ket_thuc');
            $table->integer('loai_giam');
            $table->integer('so_gia_giam');
            $table->integer('so_tien_doi_da');
            $table->integer('don_gia_doi_thieu');
            $table->boolean('tinh_trang');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
};
