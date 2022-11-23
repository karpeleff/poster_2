<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->id();
            $table->string('autor')->nullable();
            $table->string('tel')->nullable();
            $table->string('sity')->nullable();
            $table->string('sity_id')->nullable();
            $table->string('email')->nullable();
            $table->string('cat')->nullable();
            $table->string('subcat')->nullable();
            $table->string('board')->nullable();
            $table->string('header')->nullable();
            $table->longText('text')->nullable();
            $table->string('image')->nullable();
            $table->longText('status')->nullable();
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
        Schema::dropIfExists('adverts');
    }
}
