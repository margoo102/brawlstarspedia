<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsePredefinedSpeedsTable extends Migration {
    public function up() {
        Schema::table('brawlers', function (Blueprint $table) {
            $table->bigInteger('attack_speed_id')->unsigned()->nullable();
            $table->bigInteger('movement_speed_id')->unsigned()->nullable();

            $table->foreign('attack_speed_id')->references('id')->on('speeds');
            $table->foreign('movement_speed_id')->references('id')->on('speeds');
        });
    }

    public function down(){
    }
}
