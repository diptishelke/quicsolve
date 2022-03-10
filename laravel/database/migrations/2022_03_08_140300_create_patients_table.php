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
        // Name, Email, Phone, Age, Gender, Address, Photo
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('email',100);
            $table->integer('phone');
            $table->integer('age');
            $table->longtext('address');
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
        Schema::dropIfExists('patients');
    }
};