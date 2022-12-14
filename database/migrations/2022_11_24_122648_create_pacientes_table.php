<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 160);
            $table->string("email", 30)->unique();
            $table->string("cpf", 14)->unique();
            $table->string("cep", 9);
            $table->string("endereco", 160);
            $table->string("numero", 9);
            $table->string("uf", 4);
            $table->string("cidade", 160);
            $table->string("telefone", 15);
            $table->date('nascimento')->nullable();
            $table->string("cpf_responsavel", 14)->unique()->nullable();
            $table->string("nome_responsavel", 160)->nullable();
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
        Schema::dropIfExists('pacientes');
    }
}
