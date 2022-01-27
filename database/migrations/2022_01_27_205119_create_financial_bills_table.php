<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_bills', function (Blueprint $table) {
            $table->id();

            $table->string('type');
            $table->string('slug')->unique();
            $table->integer('bill')->unsigned();
            $table->date('schedule');

            $table->foreignId('school_year_id');
            $table->foreignId('user_id');
            $table->string('status')->default('UNPAID');

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
        Schema::dropIfExists('financial_bills');
    }
}
