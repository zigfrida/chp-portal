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
            $table->string('name');
            $table->string('class');
            $table->decimal('units', 15, 3)->default(0);
            $table->decimal('NAVPerUnit', 15, 3)->default(0);
            $table->decimal('NAV', 15, 3)->default(0);
            $table->decimal('cost', 15, 3)->default(0);
            $table->decimal('cumulative_pref_distribution', 15, 3)->default(0);
            $table->decimal('month_distribution', 15, 3)->default(0);
            $table->string('year_profit_share')->default('');
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
