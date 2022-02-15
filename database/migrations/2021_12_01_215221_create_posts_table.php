<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('description', 255);
            $table->text('content');
            # relationships one to many
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('set null');
            # relationships one to many
            $table->unsignedBigInteger('post_type_id')->nullable();
            $table->foreign('post_type_id')
                    ->references('id')
                    ->on('post_type')
                    ->onDelete('set null');
            $table->timestamps();

            # relationship with teams table (one to one)
            # Foreign rules fot address table
            $table->unsignedBigInteger('team_id')->unique()->nullable();
            # Foreign key
            $table->foreign('team_id')
                  ->references('id')
                  ->on('teams')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
