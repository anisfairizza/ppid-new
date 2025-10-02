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
        Schema::create('permohonan', function (Blueprint $table) {
            $table->uuid('id')->nullable();
            $table->string('nama')->nullable();
            $table->string('no_nik')->nullable();
            $table->string('no_wa')->nullable();
            $table->string('katgeori')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('email')->nullable();
            $table->string('alamat')->nullable();
            $table->string('filektp')->nullable();
            $table->string('informasirincian')->nullable();
            $table->string('informasitujuan')->nullable();
            $table->string('informasibentuk')->nullable();
            $table->string('informasicara')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permohonan');
    }
};
