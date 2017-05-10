<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Wasson_ECE\Partly\Enums\UMVerified;

class AddUmverifiedToPart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partly_part', function (Blueprint $table) {
            $table->integer('UMVerified')->default(UMVerified::NotFlagged);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
