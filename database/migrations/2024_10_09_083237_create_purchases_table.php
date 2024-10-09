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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }

    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // foreign key untuk user
            $table->string('book_title'); // judul bab buku yang dibeli
            $table->string('proof_of_payment')->nullable(); // bukti pembayaran (gambar)
            $table->boolean('is_verified')->default(false); // status verifikasi
            $table->timestamps(); // created_at dan updated_at
        });
    }

        public function down()
    {
        Schema::dropIfExists('purchases');
    }


};
