<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStructureDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('structure_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('quantity')->nullable();
            $table->string('area')->nullable();
            $table->string('cost')->nullable();
            $table->string('value')->nullable();
            $table->string('structure_claimant_id')->nullable();
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
        Schema::dropIfExists('structure_datas');
    }
}
