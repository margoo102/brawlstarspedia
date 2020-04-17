<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeedsTable extends Migration {
    public function up() {
        Schema::create('speeds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('value');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('speeds');
    }
}
