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
        Schema::create('album_music', function (Blueprint $table) {
            $table->id();
            $table->string('Judul');
            $table->string('Tahun');
            $table->string('Cover_album');
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
        Schema::dropIfExists('album_music');
    }
};
