<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name')->nullable();

            $table->text('address')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('city', 80)->nullable();
            $table->string('state', 80)->nullable();
            $table->string('country', 80)->nullable();
            $table->string('country_code', 9)->nullable();
            $table->string('smart_location')->nullable();
            $table->string('neighborhood')->nullable();

            $table->float('price')->nullable();
            $table->float('price_native')->nullable();
            $table->string('price_formatted')->nullable();

            $table->tinyInteger('bedrooms')->nullable();
            $table->tinyInteger('beds')->nullable();
            $table->tinyInteger('bathrooms')->nullable();
            $table->string('property_type')->nullable();
            $table->string('room_type')->nullable();
            $table->integer('reviews_count')->nullable();
            $table->integer('picture_count')->nullable();
            $table->tinyInteger('instant_bookable')->nullable();
            $table->tinyInteger('person_capacity')->nullable();


            $table->string('lat')->nullable();
            $table->string('lng')->nullable();


            $table->json('urls')->nullable();
            $table->json('user')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homes');
    }
}
