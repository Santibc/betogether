<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plantilla_negocio', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresa_id')->constrained('negocios')->onDelete('cascade');
            $table->foreignId('plantilla_id')->constrained('plantillas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plantilla_empresa');
    }
};
