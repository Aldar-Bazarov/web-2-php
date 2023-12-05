<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatyasTable extends Migration
{
    public function up()
    {
        Schema::create('statyas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('lid');
            $table->text('content');
            $table->string('image')->nullable();
            $table->foreignId('rubric_id')->constrained('rubrics');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('statyas');
    }
}
