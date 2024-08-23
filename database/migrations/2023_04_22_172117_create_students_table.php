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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('s_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('roll_id')->nullable();
            $table->foreignId('class_id')->constrained('school_classes', 'id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('phone_number')->nullable();
            $table->string('nationality')->nullable();
            $table->string('address')->nullable();
            $table->string('guardian')->nullable();
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
        Schema::dropIfExists('students');
    }
};
