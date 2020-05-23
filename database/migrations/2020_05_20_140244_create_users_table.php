<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('username',20);
            $table->string('password');
            $table->string('type',10)->default('user');
            $table->string('genere',5)->nullable();
             $table->string('residence',20)->nullable();
            $table->string('province',2)->nullable();
            $table->string('employment',20)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
