<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_kp', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("nim");
            $table->string("bidang");
            $table->integer("tahun");
            $table->string("judul");
            $table->string("koleksi");
            $table->string("dosen_pembimbing");
            $table->string("abstrak");
            $table->string("inifile");
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
        Schema::dropIfExists('table_kp');
    }
};
