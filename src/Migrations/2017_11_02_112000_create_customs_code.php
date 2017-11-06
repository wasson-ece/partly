<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomsCode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partly_customs_code', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('part_id');
            $table->foreign('part_id')->references('id')
                ->on('partly_parts');
            $table->integer('type');
            $table->string('value');
            $table->datetime('verified_date')->nullable();
            $table->string('source')->nullable();
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
        Schema::dropIfExists('partly_customs_code');
    }
}
