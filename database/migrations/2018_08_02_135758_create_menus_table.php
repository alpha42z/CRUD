<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration 
{

    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->unsignedInteger('parent_id')->nullable();
            $table->string('slug_pt')->nullable();
            $table->string('slug_en')->nullable();
            $table->string('slug_cn')->nullable();
            $table->foreign('parent_id')->references('id')->on('menus');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('menus');
    }
}