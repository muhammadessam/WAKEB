<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('img_url');
            $table->string('name');
            $table->text('description');
            $table->text('keywords');
            $table->string('author');
            $table->string('url');
            $table->string('tw');
            $table->string('fb');
            $table->string('li');
            $table->string('yt');
            $table->string('email');
            $table->string('mobile');
            $table->string('location');
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
        Schema::dropIfExists('settings');
    }
}
