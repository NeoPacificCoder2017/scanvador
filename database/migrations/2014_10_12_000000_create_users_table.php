<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->integer('users_type_id');
            $table->string('password');
            $table->string('class');
            $table->string('birth_date');
            $table->string('official_picture');
            $table->string('profil_picture');
            $table->string('token')->unique();
            $table->string('supervisor_name');
            $table->string('supervisor_phone_number');
            $table->string('supervisor_mail');
            $table->integer('establishment_id');
            $table->string('qr_code');
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
