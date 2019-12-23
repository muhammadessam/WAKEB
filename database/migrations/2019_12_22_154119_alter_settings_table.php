<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function(Blueprint $blueprint){
            $blueprint->text('img_url')->nullable()->change();
            $blueprint->string('name')->nullable()->change();
            $blueprint->text('description')->nullable()->change();
            $blueprint->text('keywords')->nullable()->change();
            $blueprint->string('author')->nullable()->change();
            $blueprint->string('url')->nullable()->change();
            $blueprint->string('tw')->nullable()->change();
            $blueprint->string('fb')->nullable()->change();
            $blueprint->string('li')->nullable()->change();
            $blueprint->string('yt')->nullable()->change();
            $blueprint->string('email')->nullable()->change();
            $blueprint->string('mobile')->nullable()->change();
            $blueprint->string('location')->nullable()->change();
            $blueprint->text('address')->nullable();
            $blueprint->string('phone')->nullable();
            $blueprint->unsignedBigInteger('lang_id');
            $blueprint->foreign('lang_id')->references('id')->on('langs');
        });
        DB::table('settings')->insert(['lang_id' => 1]);
        DB::table('settings')->insert(['lang_id' => 2]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
