<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('medicos');

        Schema::create('medicos', function (Blueprint $table) {
            $table->id();
            $table->string("nome", "160")->unique();
            $table->string("crm", 20)->unique();
            $table->bigInteger('especialidade_id')->unsigned()->index()->nullable();
            $table->foreign('especialidade_id')->references('id')->on('especialidades')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('medicos');
    }
}
