<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {

    public function up() {
        Schema::create('bookables', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('bookables');
    }
};
