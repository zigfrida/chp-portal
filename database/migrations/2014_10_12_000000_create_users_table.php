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
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
<<<<<<< HEAD
            $table->string('telephone')->default('555-555-5555');
            $table->string('address')->default('16th St. West London');
            $table->integer('salary')->default(0);
            $table->string('class')->default('B');
=======
            $table->string('telephone')->nullable();
            $table->string('address')->nullable();
            $table->string('class')->nullable();
            $table->integer('access')->default(0);

>>>>>>> 9c4ed1e75dbf3fd184e6329d713acab9669e6757
            $table->rememberToken();
            $table->timestamps();

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
