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
        Schema::create('gewogs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('dzo_id')->unsigned()->index()->nullable();
            $table->foreign('dzo_id')->references('id')->on('dzongkhags')->onDelete('cascade');
            $table->string('geo_name');
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
        Schema::dropIfExists('gewogs');
    }
};
