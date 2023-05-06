<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifficationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notiffications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_expediteur');
            $table->string('name_expediteur');
            $table->string('img_expedietur');
            $table->bigInteger('id_destinateur');
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
        Schema::dropIfExists('notiffications');
    }
}
