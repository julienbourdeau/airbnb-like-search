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
            $table->string('city', 80)->nullable();
            $table->string('country', 80)->nullable();

            $table->float('price')->nullable();

            $table->string('room_type')->nullable();

            $table->string('lat')->nullable();
            $table->string('lng')->nullable();


            $table->text('picture_url')->nullable();
            $table->text('user_thumbnail_url')->nullable();
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
