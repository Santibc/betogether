<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImagenToServiciosEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('servicios_empresa', function (Blueprint $table) {
            $table->string('imagen')->nullable()->after('precio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('servicios_empresa', function (Blueprint $table) {
            $table->dropColumn('imagen');
        });
    }
}
