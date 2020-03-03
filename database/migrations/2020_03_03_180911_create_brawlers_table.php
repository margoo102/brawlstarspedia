<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrawlersTable extends Migration {

    public function up() {
        Schema::create('brawlers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('speed_movement');
            $table->string('attack_range');
            $table->string('reload_speed');
            $table->string('super_attack_range');
            $table->string('name');

            $table->tinyInteger('offense')->unsigned();
            $table->tinyInteger('defense')->unsigned();
            $table->tinyInteger('utility')->unsigned();

            $table->string('super');

            $table->bigInteger('created_by_id')->nullable();
            $table->bigInteger('updated_by_id')->nullable();
            $table->timestamps();

            $table->foreign('created_by_id')->references('id')->on('users');
            $table->foreign('updated_by_id')->references('id')->on('users');
        });
    }

    public function down() {
        Schema::dropIfExists('brawlers');
    }
}
