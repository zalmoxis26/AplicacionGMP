<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cliente')->nullable($value = false);
            $table->string('empresa')->nullable($value=true);
            $table->string('obra')->nullable($value=true);
            $table->string('celular')->nullable($value = true);
            $table->integer('piezas')->nullable($value = true)->default('0');
            $table->decimal('precio',8,2)->nullable($value = false);
            $table->integer('dias')->nullable($value = true);
            $table->date('fechaRem')->nullable($value = false);
            $table->date('fechaDev')->nullable($value = false);
            $table->softDeletes();
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
        Schema::dropIfExists('cotizaciones');
    }
}
