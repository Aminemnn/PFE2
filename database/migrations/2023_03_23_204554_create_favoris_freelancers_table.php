<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavorisFreelancersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoris_freelancers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->string('sous_category');
            $table->string('price_category');
            $table->string('price');
            $table->string('type_price');
            $table->string('semaine')->nullable();
            $table->date('date')->nullable();
            $table->string('description');
            $table->bigInteger('id_user');
            $table->string('name_user');
            $table->bigInteger('id_ann');
            $table->string('img_user');
            $table->string('img_client');
            $table->string('name_client');
            $table->bigInteger('id_client');
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
        Schema::dropIfExists('favoris_freelancers');
    }
}
