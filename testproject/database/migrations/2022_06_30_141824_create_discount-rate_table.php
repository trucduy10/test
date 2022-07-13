<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discount-rate', function (Blueprint $table) {
            $table->tinyInteger('id');
            $table->integer('pointGreaterThan');
            $table->decimal('rate', $precision = 3, $scale = 2);
            $table->primary('id');
            $table->timestamps();
        });

        DB::table('discount-rate')->insert(['id'=>'1','pointGreaterThan'=>'1','rate'=>'1']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discount-rate');
    }
};
