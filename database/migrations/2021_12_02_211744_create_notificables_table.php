<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('notificable_id');
            $table->string('notificable_type', 255);
            $table->unsignedBigInteger('notification_id');
            $table->foreign('notification_id')
                    ->references('id')
                    ->on('notifications')
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
        Schema::dropIfExists('notificables');
    }
}
