<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTermTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('term_type', function (Blueprint $table) {
            $table->integer('term_id')->unsigned();
            $table->integer('type_id')->unsigned();
        });
        Schema::table('term_type', function (Blueprint $table) {
            $table->foreign('term_id')->references('id')->on('terms');
            $table->foreign('type_id')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('term_type');
    }
}
