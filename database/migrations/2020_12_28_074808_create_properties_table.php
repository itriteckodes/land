<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agent_id');
            $table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade');
            $table->string('title');
            $table->bigInteger('area');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('garage');
            $table->string('image1')->default('usman.jpg');
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('type');
            $table->text('address');
            $table->string('block');
            $table->string('marla');
            $table->bigInteger('price');
            $table->foreignId('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('description');
            $table->boolean('occupy')->default(false);
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
        Schema::dropIfExists('properties');
    }
}
