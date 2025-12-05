<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // Básico
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            // Controle de acesso
            $table->enum('nivel_acesso', ['admin', 'profissional', 'cliente'])
                ->default('cliente');

            // Informações opcionais
            $table->string('telefone')->nullable();
            $table->string('cpf')->nullable()->unique();
            $table->string('avatar')->nullable();

            // Informações de profissionais
            $table->string('especialidade')->nullable();
            $table->text('bio')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();

            // Controle e auditoria
            $table->boolean('ativo')->default(true);
            $table->timestamp('last_login_at')->nullable();
            $table->ipAddress('last_login_ip')->nullable();

            // Laravel padrão
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
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
