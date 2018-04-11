<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNumRevIndexToPartlyPart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partly_part', function (Blueprint $table) {
            $table->index(['number', 'revision']);
            $table->string('revision')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partly_part', function (Blueprint $table) {
            $table->dropIndex(['number', 'revision']);
            $table->string('revision')->nullable(true)->change();
        });
    }
}
