<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUndangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('undangans', function (Blueprint $table) {
            $table->id();
            $table->string('email_create');
            $table->string('slug', 50);
            $table->string('nama_lengkap_l', 20);
            $table->string('nama_lengkap_p', 20);
            $table->string('nama_panggilan_l', 20);
            $table->string('nama_panggilan_p', 20);
            $table->string('nama_bpk_l', 20);
            $table->string('nama_ibu_l', 20);
            $table->string('nama_bpk_p', 20);
            $table->string('nama_ibu_p', 20);
            $table->string('facebookl', 20)->nullable();
            $table->string('instagraml', 20)->nullable();
            $table->string('facebookp', 20)->nullable();
            $table->string('instagramp', 20)->nullable();
            $table->string('music', 100)->nullable();
            $table->text('alamat')->nullable();
            $table->text('google_map')->nullable();
            $table->text('image_mempelai')->nullable();
            $table->text('image')->nullable();
            $table->foreignId('buku_tamu_id');
            $table->foreignId('tema_id');
            $table->timestamp('tanggal_penikahan');
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
        Schema::dropIfExists('undangans');
    }
}
