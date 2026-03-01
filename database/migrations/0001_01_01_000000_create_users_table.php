<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('int_id'); // INTEGRANTE PK INT_ID NUMBER
            $table->unsignedBigInteger('int_rol')->nullable(); // FK INT_ROL NUMBER
            $table->foreign('int_rol')->references('rol_id')->on('roles');
            $table->string('int_rut', 12)->unique(); // INT_RUT VARCHAR2(12)
            $table->string('int_nombre', 255); // INT_NOMBRE VARCHAR2(255)
            $table->string('int_apellido_paterno', 120); // INT_APELLIDO_PATERNO VARCHAR2(120)
            $table->string('int_apellido_materno', 120)->nullable(); // INT_APPELIDO_MATERNO VARCHAR2(120)
            $table->string('int_nombre_completo', 255)->nullable(); // INT_NOMBRE_COMPLETO VARCHAR2(255)
            $table->string('numero_camiseta', 10)->nullable(); // NUMERO DE CAMISETA VARCHAR2(10)
            $table->string('int_posicion', 30)->nullable(); // INT_POSICION VARCHAR2(30)
            $table->string('int_telefono', 140)->nullable(); // INT_TELEFONO VARCHAR2(140)
            $table->date('int_fecha_nacimiento')->nullable(); // INT_FECHA_NACIMIENTO DATE
            $table->string('int_instagram', 30)->nullable(); // INT_INSTAGRAM VARCHAR2(30)
            $table->boolean('int_estado')->default(true); // INT_ESTADO BOOLEANO
            $table->string('password'); // Needed for auth
            $table->rememberToken();
            $table->timestamps();
        });

        // We will remove password reset functionality since it requires email,
        // and session user_id needs to be tracked by int_id or user_id compatible ID
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->unsignedBigInteger('user_id')->nullable()->index(); // Will store int_id
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
