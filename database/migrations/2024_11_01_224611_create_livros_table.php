<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
           
            $table->increments('id');
            $table->string ('titulo', 100);
            $table->string ( 'autor',50);
            $table->integer (column:  'ano_publicacao');
            $table->text ( 'resumo' )-> nullable(value: true);
 
        });
    }
 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
