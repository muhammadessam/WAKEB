<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUseCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('use_cases', function (Blueprint $table){
            $table->unsignedBigInteger('solution_id');
            $table->foreign('solution_id')->references('id')->on('solutions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('use_cases', function (Blueprint $table){
            $table->dropColumn('solution_id');
        });
    }
}
