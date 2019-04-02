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
            $table->boolean('clientType')->default(0)->change();
            $table->string('subscriber_name')->default('');
            $table->string('street')->default('');
            $table->string('city')->default('');
            $table->string('province')->default('');
            $table->string('postal_code')->default('');
            $table->string('phone')->default('');
            $table->string('email')->default('');
            $table->string('sin')->default('');
            $table->string('signatory_first_name')->default('');
            $table->string('signatory_last_name')->default('');
            $table->string('official_capacity_or_title_of_authorized_signatory')->default('');
            $table->string('business_number')->default('');
            $table->string('total_investment')->default('');
            $table->boolean('ind_ck1')->default(0)->change();
            $table->boolean('ind_ck2')->default(0)->change();
            $table->boolean('ind_ck3')->default(0)->change();
            $table->boolean('ind_ck4')->default(0)->change();
            $table->boolean('ind_ck5')->default(0)->change();
            $table->boolean('ind_ck6')->default(0)->change();
            $table->boolean('bus_ck1')->default(0)->change();
            $table->boolean('bus_ck2')->default(0)->change();
            $table->boolean('bus_ck3')->default(0)->change();
            $table->boolean('bus_ck4')->default(0)->change();
            $table->boolean('bus_ck5')->default(0)->change();
            $table->boolean('bus_ck6')->default(0)->change();
            $table->boolean('bus_ck7')->default(0)->change();
            $table->boolean('bus_ck8')->default(0)->change();
            $table->boolean('bus_ck9')->default(0)->change();
            $table->boolean('bus_ck10')->default(0)->change();

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
