<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\About;

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
            $table->text('title')->nullable();
            $table->longText('about_us')->nullable();
            $table->longText('our_goals')->nullable();
            $table->longText('vision')->nullable();
            $table->longText('how_we_work')->nullable();
            $table->unsignedBigInteger('lang_id');
            $table->foreign('lang_id')->references('id')->on('langs')->onDelete('cascade');
            $table->timestamps();
        });
        DB::table('about')->insert(['lang_id' => 1]);
        DB::table('about')->insert(['lang_id' => 2]);

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
