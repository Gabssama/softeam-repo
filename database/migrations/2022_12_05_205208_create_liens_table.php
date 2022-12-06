<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_materiel', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('client_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');   
        
            $table->foreignId('materiel_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_materiel');
    }
}
