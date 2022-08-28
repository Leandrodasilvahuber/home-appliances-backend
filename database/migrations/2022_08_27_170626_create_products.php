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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyText('description');
            $table->timestamps();

            $table->unsignedBigInteger('producer_id');
            $table->unsignedBigInteger('voltage_id');

            $table->foreign('producer_id')
                ->references('id')
                ->on('producers');

            $table->foreign('voltage_id')
                ->references('id')
                ->on('voltages');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
