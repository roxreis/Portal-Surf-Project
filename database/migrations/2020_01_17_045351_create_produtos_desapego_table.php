<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosDesapegoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtosDesapego', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->idprodutosDesapegos('id');
            $table->idprodutosDesapegos('id');
            $table->idprodutosDesapegos('id');
            $table->idprodutosDesapegos('id');
            $table->idprodutosDesapegos('id');
            $table->idprodutosDesapegos('id');
            $table->idprodutosDesapegos('id');
            $table->idprodutosDesapegos('id');
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
        Schema::dropIfExists('produtosDesapego');
    }
}
