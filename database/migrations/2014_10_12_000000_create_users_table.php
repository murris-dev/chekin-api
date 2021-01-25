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
        Schema::create('seg_users', function (Blueprint $table) {
            $table->id();
            $table->string('usuario',30)->unique();
            $table->string('nombre', 30);
            $table->string('apellidos', 30);
            $table->string('telefono', 30)->nullable();
            $table->string('email')->unique();
            $table->boolean('estado');
            $table->string('password', 100);
            
            $table->dateTime('fecha_alta')->nullable();
            $table->unsignedInteger('id_usuario_alta')->nullable();
            $table->dateTime('fecha_baja')->nullable()->nullable();
            $table->unsignedInteger('id_usuario_baja')->nullable();
            $table->dateTime('fecha_desde')->nullable();
            $table->dateTime('fecha_hasta')->nullable();
            $table->unsignedInteger('id_usuario_modif')->nullable();

            // $table->foreign('id_usuario_alta')->reference('id')->on('seg_users');
            // $table->foreign('id_usuario_baja')->reference('id')->on('seg_users');
            // $table->foreign('id_usuario_modif')->reference('id')->on('seg_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seg_users');
    }
}
