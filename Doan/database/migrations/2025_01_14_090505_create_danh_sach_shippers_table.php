<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('danh_sach_shippers', function (Blueprint $table) {
            $table->id();
            $table->string('ho_va_ten');
            $table->integer('so_dien_thoai');
            $table->string('email');
            $table->string('cmnd');
            $table->string('dia_chi_thuong_tru');
            $table->string('tinh_thanh');
            $table->string('quan_huyen');
            $table->string('toa_do_x');
            $table->string('toa_do_y');
            $table->boolean('trang_thai');
            $table->boolean('tinh_trang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('danh_sach_shippers');
    }
};
