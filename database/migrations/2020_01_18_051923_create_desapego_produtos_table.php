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
            $table->bigIncrements('id')->unique();
         
            $table->string('descriptionProduct', 360);
            $table->float('priceProduct', 10, 2);
            $table->string('withdrawalState', 45);
            $table->string('withdrawalCity', 45);
            $table->string('withdrawalNeighborhood', 45);
            $table->string('imgProduct', 256)->nullable();
            $table->string('phone', 11);
            $table->timestamps();
            // $table->unsignedBigInteger('Users_id')->unique();
            // $table->foreign('Users_id')->references('id')->on('users');
               // $table->string('segment', 15);
            // $table->string('typeEquipament', 15);
            // $table->string('stateProduct', 50);
            // $table->string('titleProduct', 256);
            
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
