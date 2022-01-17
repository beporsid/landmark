<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('room_number')->default(0);
            $table->integer('area');
            $table->integer('parking_number');
            $table->integer('price');
            $table->integer('deposit');
            $table->integer('rent');
            $table->enum(['FIELD','APARTMENT','VILLA']);
            $table->string('avatar_path')->nullable();
            $table->enum(['contract','FOR_SALE','FOR_RENT']);
            $table->boolean('s_vip')->default(false);
            $table->text('description')->nullable();
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
        Schema::dropIfExists('cases');
    }
}