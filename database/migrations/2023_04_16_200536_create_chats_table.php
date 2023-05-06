<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('conversation_id');
            $table->bigInteger('id_expediteur');
            $table->bigInteger('id_destinateur');
            $table->string('name_expediteur');
            $table->string('name_destinateur');
            $table->string('img_expedietur');
            $table->string('img_destinateur');
            $table->string('message');
            $table->string('read');
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
        Schema::dropIfExists('chats');
    }
}
