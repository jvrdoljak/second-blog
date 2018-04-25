<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTermUpdatedByTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('term_updated_by', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('term_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('term_updated_by', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('term_id')->references('id')->on('terms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('term_updated_by');
    }
}
