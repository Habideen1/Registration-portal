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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('pin');
            $table->string('branch');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('age_bracket');
            $table->string('gender');
            $table->string('home_address');
            $table->string('next_of_kin');
            $table->string('qualification');
            $table->string('occupation');
            $table->string('employer');
            $table->string('ailment');
            $table->string('payment_mode');
            $table->string('tag_number')->nullable();
            $table->string('group')->nullable();
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
        Schema::dropIfExists('members');
    }
};
