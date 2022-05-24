<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYourSelvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('your_selves', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_profile_id')->constrained();
            $table->string('about_you')->nullable();
            $table->string('hobbies')->nullable();
            $table->string('aim')->nullable();
            $table->string('favourite_thing')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('dream')->nullable();
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
        Schema::dropIfExists('your_selves');
    }
}
