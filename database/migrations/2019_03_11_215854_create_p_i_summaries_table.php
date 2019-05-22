<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePISummariesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('p_i_summaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('units')->default('');
            $table->string('NAVPerUnit')->default('');
            $table->string('NAV')->default('');
            $table->string('cost')->default('');
            $table->string('cumulative_pref_distribution')->default('');
            $table->string('month_distribution')->default('');
            $table->string('amount_distribution')->default('');
            $table->string('year_profit_share')->default('');
            $table->longText('comment')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('p_i_summaries');
    }
}
