<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advers',function(Blueprint $table){
            $table->increments('id');
            $table->string('author');
            $table->string('title');
            $table->string('image_url');
            $table->string('content');
            $table->string('location');
            $table->string('date');
            $table->string('type');
            $table->string('note');
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
        Schema::drop('advers');
            }
}
