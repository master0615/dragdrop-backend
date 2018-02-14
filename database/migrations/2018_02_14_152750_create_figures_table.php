<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiguresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('figures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->double('left', 8, 2);
            $table->double('top', 8, 2);
            $table->double('width', 8, 2);
            $table->double('height', 8, 2);
            $table->double('angle', 8, 2);
            $table->string('color');
            $table->unsignedInteger('opacity');
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
        Schema::dropIfExists('figures');
    }
}
