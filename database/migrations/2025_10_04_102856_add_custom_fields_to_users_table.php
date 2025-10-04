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
        // Menggunakan Schema::table() untuk memodifikasi tabel 'users'
        Schema::table('users', function (Blueprint $table) {
            // Menambahkan kolom-kolom baru setelah kolom 'password'
            $table->enum('role', ['admin', 'teknisi', 'pelanggan'])->default('pelanggan')->after('password');
            $table->string('phone', 20)->nullable()->after('role');
            $table->text('alamat')->nullable()->after('phone');
            $table->string('profile')->nullable()->after('alamat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Kode ini untuk membatalkan perubahan jika diperlukan (rollback)
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'phone', 'alamat', 'profile']);
        });
    }
};