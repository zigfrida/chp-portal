<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class');
            $table->string('inception_date');
            $table->string('min_investment');
            $table->string('distributions');
            $table->string('preferred_return');
            $table->string('performance_fee');
            $table->string('redemption');
            $table->string('subscription');
            $table->longText('management_comment')->nullable();
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
        Schema::dropIfExists('fund_infos');
    }
}
