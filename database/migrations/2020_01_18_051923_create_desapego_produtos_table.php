<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesapegoProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desapego_produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('idProdutosDesapego');
            $table->string('segmento');
            $table->string('tipoEquipamento', 15);
            $table->string('estadoProduto', 50);
            $table->string('tituloProduto', 256);
            $table->string('descricaoProduto', 360);
            $table->string('precoProduto', 2);
            $table->string('retiradaEstado', 45);
            $table->string('retiradaCidade', 45);
            $table->string('retiradaBairro', 45);
            $table->string('fotoProduto', 256);
            $table->bigIncrements('idUsuario');
            $table->bigIncrements('Usuarios_id');
            $table->bigIncrements('vendasDesapego_idVendasDesapego');
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
        Schema::dropIfExists('desapego_produtos');
    }
}
