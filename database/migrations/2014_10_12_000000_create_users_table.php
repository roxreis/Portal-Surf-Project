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
            $table->string('person');
            $table->string('name', 300);
            $table->string('email', 300)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 300);
            $table->integer('cpf');
            $table->string('gender', 10);
            $table->string('state', 300);
            $table->string('city', 300);
            $table->integer('phone1');
            $table->integer('phone2');
            $table->boolean('programaCarona');
            $table->boolean('terms');
            $table->boolean('emailNotification');
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
