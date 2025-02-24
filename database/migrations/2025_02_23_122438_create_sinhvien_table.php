<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sinhvien', function (Blueprint $table) {
            $table->id();
            $table->string('MaSV')->unique();
            $table->string('HoTen');
            $table->date('NgaySinh');
            $table->string('GioiTinh');
            $table->string('DiaChi');
            $table->string('SDT');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sinhvien');
    }
};
