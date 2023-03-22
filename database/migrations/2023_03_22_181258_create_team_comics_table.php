<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_comics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 50);
            $table->text('description');
            $table->string('thumb', 500);
            $table->unsignedFloat('price', 6, 2);
            $table->string('series', 50);
            $table->date('sale_date');
            $table->string('type', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_comics');
    }
};
