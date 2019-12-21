<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->longText('about_us');
            $table->longText('our_goals');
            $table->longText('vision');
            $table->longText('how_we_work');
            $table->unsignedBigInteger('lang_id');
            $table->foreign('lang_id')->references('id')->on('langs')->onDelete('cascade');
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
        Schema::dropIfExists('about');
    }
}
