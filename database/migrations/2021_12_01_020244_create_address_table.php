<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->string('estado', 90);
            $table->string('calle', 90);
            $table->string('pais', 90);
            $table->string('urbanizacion', 200);
            $table->string('municipio', 200);

            $table->unsignedBigInteger('information_id')->unique();

            #foreign key
            $table->foreign('information_id')
                  ->references('id')
                  ->on('informations')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

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
        Schema::dropIfExists('address');
    }
}
