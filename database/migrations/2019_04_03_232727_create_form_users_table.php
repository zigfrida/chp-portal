<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormUsersTable extends Migration
{
    /**
     * Run the migrations.
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
            $table->string('phone_mobile')->default('');
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

            // For the purposes of the sub-agreement form
            $table->string('signed_day1')->default('');
            $table->string('signed_month1')->default('');
            $table->string('signed_year1')->default('');

            $table->string('signed_day2')->default('');
            $table->string('signed_month2')->default('');

            $table->string('registration_name')->default('');
            $table->string('registration_account_reference')->default('');
            $table->string('registration_address')->default('');

            $table->string('delivery_contact')->default('');
            $table->string('delivery_telephone')->default('');
            $table->string('delivery_account_reference')->default('');
            $table->string('delivery_address')->default('');

            $table->string('risk_ck1')->default('');
            $table->string('risk_ck2')->default('');
            $table->string('risk_ck3')->default('');
            $table->string('risk_ck4')->default('');

            $table->string('risk_ck5')->default('');
            $table->string('risk_ck6')->default('');
            $table->string('risk_ck7')->default('');
            $table->string('risk_chk8')->default('');

            $table->boolean('profile_changed')->nullable()->default(0);

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('form_users');
    }
}
