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
        Schema::create('danhsachquanans', function (Blueprint $table) {
            $table->id();
            $table->string('ten_quan_an');
            $table->string('email');
            $table->string('so_dien_thoai');
            $table->string('chi_tiet');
            $table->string('trang_thai');
            $table->string('kich_hoat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('danhsachquanans');
    }
};
