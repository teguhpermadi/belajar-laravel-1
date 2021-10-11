<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('namasekolah');
            $table->string('npsn')->nullable();
            $table->enum('bentuk', ['tk', 'sd', 'smp', 'sma']);
            $table->string('alamat')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('distrik')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kodepos')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->string('telp')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sekolahs');
    }
}
