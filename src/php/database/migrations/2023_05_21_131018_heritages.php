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
        Schema::create('heritages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->enum('country_name', [0, 195]);
            $table->text('explanation');
            $table->integer('registered_year');
            $table->enum('continent',[0, 5]);
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
        Schema::dropIfExists('heritages');
    }
};
