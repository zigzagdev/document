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
            $table->string('name');
            $table->integer('country_name');
            $table->text('explanation');
            $table->integer('registered_year');
            $table->integer('continent');
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
