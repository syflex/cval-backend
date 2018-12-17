<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCropClaimantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crop_claimants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('claimant_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('other_name')->nullable();
            $table->string('location')->nullable();
            $table->string('community')->nullable();
            $table->string('coordinates')->nullable();
            $table->string('image')->nullable();
            $table->string('signature')->nullable();
            $table->string('attorney_signature')->nullable();
            $table->string('finger_print')->nullable();
            $table->string('valuer_id')->nullable();
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
        Schema::dropIfExists('crop_claimants');
    }
}
