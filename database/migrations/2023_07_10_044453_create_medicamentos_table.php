<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentosTable extends Migration
{
    public function up()
    {
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fecha_vencimiento');
            $table->string('lote');
            $table->string('registro_invima');
            $table->decimal('valor', 8, 2); // Agrega el campo para el valor del medicamento
                  $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('medicamentos');
    }
}
