<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * para agregar atributos nuevos a tablas que ya fueron migradas
     * php artisan make:migration add_phone_to_messages_table --table=messages
     */
    public function up(): void //php artisan migrate
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('email');
            $table->text('mensaje');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //php artisan migrate:rollback
    {
        Schema::dropIfExists('messages');
    }
};
