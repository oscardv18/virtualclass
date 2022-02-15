<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('doc_id')->unique();
            $table->string('picture', 255);

            # foreign rules for users table
            $table->unsignedBigInteger('user_id')->unique();

            # Foreign key
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            //relationships one to one
            # Foreign rules fot address table
            $table->unsignedBigInteger('address_id')->unique();
            # Foreign key
            $table->foreign('address_id')
                  ->references('id')
                  ->on('address')
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
        Schema::dropIfExists('informations');
    }
}
