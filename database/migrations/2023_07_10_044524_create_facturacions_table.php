<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturacionesTable extends Migration
{
    public function up()
    {
        Schema::create('facturaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pedido_id');
            $table->string('numero_factura');
            $table->decimal('monto', 8, 2);
            $table->timestamps();

            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('facturaciones');
    }
}
