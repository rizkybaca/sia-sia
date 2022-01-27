<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_profiles', function (Blueprint $table) {
            // $table->id();
            $table->string('id')->unique();

            $table->string('slug')->unique();
            $table->foreignId('user_id');
            $table->string('teacher_code');
            $table->enum('gender', ['F', 'M'])->nullable();
            $table->string('phone');
            $table->string('image')->nullable();


            $table->softDeletes();
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
        Schema::dropIfExists('teacher_profiles');
    }
}
