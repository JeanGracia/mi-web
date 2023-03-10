<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * para adicionar columnas a una tabla.
     * php artisan migrate
     */
    public function up(): void
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->string('phone')->after('email')->nullable();
        });
    }

    /**
     * para revertir los cabios a la tabla
     * php artisan migrate:rollback
     * para hacer rollback y migrate a la vez
     * php artisan migrate:refresh
     */
    public function down(): void
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->dropColumn('phone');
        });
    }
};
