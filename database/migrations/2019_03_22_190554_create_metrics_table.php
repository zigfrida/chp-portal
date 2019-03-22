<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metrics', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('duration', 25, 10)->default(0);
            $table->decimal('credit_score', 25, 10)->default(0);
            $table->decimal('loan_size', 25, 10)->default(0);
            $table->decimal('number_of_loans', 25, 10)->default(0);
            $table->decimal('int_rate', 25, 10)->default(0);
            $table->decimal('duration_a', 25, 10)->default(0);
            $table->decimal('loan_size_a', 25, 10)->default(0);
            $table->decimal('int_rate_a', 25, 10)->default(0);
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
        Schema::dropIfExists('metrics');
    }
}
