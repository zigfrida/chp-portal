<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('telephone')->default('555-555-5555');
            $table->string('address')->default('69 Japanese Porn St.');
            $table->integer('salary')->default(999999);
            $table->string('hairType')->default('Super cool hair type');
            $table->string('personType')->default('Best Person');

            $table->rememberToken();
            $table->timestamps();

            //$table->boolean('isAdmin')->default(0);
            $table->string('role')->default('standard');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
