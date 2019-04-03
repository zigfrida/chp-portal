<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('class')->default('potential_client');
            $table->string('clientType')->default('');
            $table->string('subscriber_name')->default('');
            $table->string('street')->default('');
            $table->string('city')->default('');
            $table->string('province')->default('');
            $table->string('postal_code')->default('');
            $table->string('country')->default('');
            $table->string('phone')->default('');
            $table->string('email')->default('');
            $table->string('sin')->nullable()->default('');
            $table->string('signatory_first_name')->nullable()->default('');
            $table->string('signatory_last_name')->nullable()->default('');
            $table->string('official_capacity_or_title_of_authorized_signatory')->nullable()->default('');
            $table->string('business_number')->nullable()->default('');
            $table->string('total_investment')->default('');
            $table->boolean('ind_ck1')->nullable()->default(0);
            $table->boolean('ind_ck2')->nullable()->default(0);
            $table->boolean('ind_ck3')->nullable()->default(0);
            $table->boolean('ind_ck4')->nullable()->default(0);
            $table->boolean('ind_ck5')->nullable()->default(0);
            $table->boolean('ind_ck6')->nullable()->default(0);
            $table->boolean('bus_ck1')->nullable()->default(0);
            $table->boolean('bus_ck2')->nullable()->default(0);
            $table->boolean('bus_ck3')->nullable()->default(0);
            $table->boolean('bus_ck4')->nullable()->default(0);
            $table->boolean('bus_ck5')->nullable()->default(0);
            $table->boolean('bus_ck6')->nullable()->default(0);
            $table->boolean('bus_ck7')->nullable()->default(0);
            $table->boolean('bus_ck8')->nullable()->default(0);
            $table->boolean('bus_ck9')->nullable()->default(0);
            $table->boolean('bus_ck10')->nullable()->default(0);
            $table->integer('access_level')->default(0);
            $table->integer('form_level')->default(0);
;
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_users');
    }
}

