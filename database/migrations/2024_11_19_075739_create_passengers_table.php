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
        Schema::create('passengers', function (Blueprint $table) {
            $table->id();
            $table->string('flight_id'); // Kolom relasi ke flight
            $table->string('name'); // Kolom untuk nama penumpang
            // Foreign key constraint
            $table->foreign('flight_id') // Mengaitkan 'flight_id' dengan tabel 'my_flights'
                  ->references('flight_id') // Kolom 'flight_id' di tabel 'my_flights'
                  ->on('my_flights') // Tabel yang berelasi
                  ->onDelete('cascade'); // Hapus penumpang jika flight dihapus
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passengers');
    }
    };
