<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 200)->nullable();
            $table->timestamp('start_time')->nullable();
            $table->integer('created_by')->unsigned()->nullable(); // created by user (id)
            $table->integer('term_type')->unsigned();
            $table->timestamps();
        });

        Schema::table('terms', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users');
        });

        Schema::table('terms', function (Blueprint $table) {
            $table->foreign('term_type')->references('id')->on('types');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('term');
    }
}
