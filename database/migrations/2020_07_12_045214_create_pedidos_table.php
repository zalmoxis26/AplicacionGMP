<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rem')->nullable($value = false);
            $table->date('fechaRem')->nullable($value = false);
            $table->string('dev')->nullable($value = true)->default('en obra');
            $table->date('fechaDev')->default(\Carbon\Carbon::now());
            $table->string('equipo_id')->nullable($value = false);
            $table->string('cliente_id')->nullable($value = false);
            $table->integer('piezas')->default(1);
            $table->integer('dias')->default(1);
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
        Schema::dropIfExists('pedidos');
    }
}
