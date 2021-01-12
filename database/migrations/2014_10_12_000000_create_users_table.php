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
            $table->id();//Integer Unsigned Increment - Entero, sin signo(+,-), Auto-incrementable
            $table->string('name'); //varchar
            $table->string('email')->unique();//Este campo debe ser único, no se podrán registrar registros
            $table->timestamp('email_verified_at')->nullable();//Campo de fecha, el campo puede quedar vació
            $table->string('password');
            $table->string('avatar');
            $table->rememberToken();//varchar de 100, guarda un token cada que el usuario mantenga su sesión iniciada
            $table->timestamps();// created_at y updated_at, se actualizan cuando se guarda o actualiza un registro
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
