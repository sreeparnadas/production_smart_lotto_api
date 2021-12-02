<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_details', function (Blueprint $table) {
            $table->id();

            $table->foreignId('result_masters_id')->references('id')->on('result_masters')->onDelete('cascade');
            $table ->foreignId('game_type_id')->references('id')->on('game_types')->onDelete('cascade');
            $table->foreignId('two_digit_number_combination_id')->references('id')->on('two_digit_number_combinations')->onDelete('cascade');

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
        Schema::dropIfExists('result_details');
    }
}
