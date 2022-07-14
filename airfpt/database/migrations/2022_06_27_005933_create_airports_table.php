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
        Schema::create('airports', function (Blueprint $table) {
            $table->char('iata_code', 3);
            $table->string('name')->unique();
            $table->string('city');
            $table->primary('iata_code');
            $table->timestamps();
        });

        DB::table('airports')->insert(['iata_code'=>'DAD','name'=>'DA NANG','city'=>'DA NANG']);
        DB::table('airports')->insert(['iata_code'=>'HAN','name'=>'HA NOI','city'=>'HA NOI']);
        DB::table('airports')->insert(['iata_code'=>'SGN','name'=>'TAN SON NHAT','city'=>'TP.HO CHI MINH']);
        DB::table('airports')->insert(['iata_code'=>'TBB','name'=>'TUY HOA','city'=>'PHU YEN']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airports');
    }
};
