<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePAnalysesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_analyses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class');
            $table->integer('n_of_months')->default(0);
            $table->decimal('ltm', 25, 10)->default(0);
            $table->decimal('overall', 25, 10)->default(0);
            $table->decimal('sharpe_ratio', 25, 10)->default(0);
            $table->integer('wml')->default(0);
            $table->decimal('st_deviation', 25, 10)->default(0);
              
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p_analyses');
    }
}
