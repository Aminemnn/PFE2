<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_projet');
            $table->string('title_projet');
            $table->string('categorie');
            $table->string('sous_categorie');
            $table->string('price_categorie');
            $table->string('price');
            $table->string('type_price');
            $table->string('semaine')->nullable();
            $table->string('date')->nullable();
            $table->string('description');
            $table->bigInteger('id_user');
            $table->string('name_user');
            $table->string('image_user');
            $table->bigInteger('id_destinateur');
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
        Schema::dropIfExists('orders');
    }
}
