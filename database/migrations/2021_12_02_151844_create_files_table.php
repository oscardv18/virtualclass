<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('name_file', 100);
            $table->string('url_file', 100);
            $table->unsignedBigInteger('fileable_id');
            $table->string('fileable_type', 255);

            $table->unsignedBigInteger('post_id');

            $table->foreign('post_id')
                    ->references('id')
                    ->on('posts')
                    ->onDelete('cascade');

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
        Schema::dropIfExists('files');
    }
}
