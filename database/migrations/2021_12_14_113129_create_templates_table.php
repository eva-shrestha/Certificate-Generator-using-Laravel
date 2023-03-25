<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->id();

            $table->string('image');
            
            $table->integer('name_x');
            $table->integer('name_y');

            $table->integer('position_x');
            $table->integer('position_y');

            $table->integer('event_x');
            $table->integer('event_y');

            $table->integer('date_x');
            $table->integer('date_y');

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
        Schema::dropIfExists('templates');
    }
}
