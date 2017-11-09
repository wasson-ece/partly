<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartlyPart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('partly_part', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number');
            $table->string('revision')->nullable();
            $table->string('description')->nullable();
            $table->string('extendedDescription')->nullable();
            $table->string('material')->nullable();
            $table->string('usedFor')->nullable();
            $table->string('countryOfOrigin')->nullable();
            $table->string('unitOfMeasure')->nullable();
            $table->string('costEach')->nullable();
            $table->string('extendedCost')->nullable();
            $table->string('commercialValue')->nullable();
            $table->string('weight')->nullable();
            $table->integer('obsolete')->default(0);
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
        Schema::dropIfExists('partly_part');
    }
}
