<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartlyPartTranslation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partly_part_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('part_id');
            $table->string('language');
            $table->string('description')->nullable();
            $table->text('extendedDescription')->nullable();
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
        Schema::dropIfExists('partly_part_translation');
    }
}
