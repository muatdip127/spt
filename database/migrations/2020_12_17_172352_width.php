<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Width extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('width', function (Blueprint $table) {
             $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id()->unique();
            $table->string('name');
            $table->string('num')->unique();
        });
        DB::table('width')->insert( array('id' => 1,'name' => '1000', 'num' =>'01' ));
        DB::table('width')->insert( array('id' => 2,'name' => '1100', 'num' =>'02' ));
        DB::table('width')->insert( array('id' => 3,'name' => '1200', 'num' =>'03' ));
        DB::table('width')->insert( array('id' => 4,'name' => '1300', 'num' =>'04' ));
        DB::table('width')->insert( array('id' => 5,'name' => '1400', 'num' =>'05' ));
        DB::table('width')->insert( array('id' => 6,'name' => '1500', 'num' =>'06' ));
        DB::table('width')->insert( array('id' => 7,'name' => '1600', 'num' =>'07' ));
        DB::table('width')->insert( array('id' => 8,'name' => '1700', 'num' =>'08' ));
        DB::table('width')->insert( array('id' => 9,'name' => '1800', 'num' =>'09' ));
        DB::table('width')->insert( array('id' => 10,'name' => '1900', 'num' =>'10' ));
        DB::table('width')->insert( array('id' => 11,'name' => '2000', 'num' =>'11' ));
        DB::table('width')->insert( array('id' => 12,'name' => '2100', 'num' =>'12' ));
        DB::table('width')->insert( array('id' => 13,'name' => '2200', 'num' =>'13' ));
        DB::table('width')->insert( array('id' => 14,'name' => '2300', 'num' =>'14' ));
        DB::table('width')->insert( array('id' => 15,'name' => '2400', 'num' =>'15' ));
        DB::table('width')->insert( array('id' => 16,'name' => '2500', 'num' =>'16' ));
        DB::table('width')->insert( array('id' => 17,'name' => '2600', 'num' =>'17' ));
        DB::table('width')->insert( array('id' => 18,'name' => '2700', 'num' =>'18' ));
        DB::table('width')->insert( array('id' => 19,'name' => '2800', 'num' =>'19' ));
        DB::table('width')->insert( array('id' => 20,'name' => '2900', 'num' =>'20' ));
        DB::table('width')->insert( array('id' => 21,'name' => '3000', 'num' =>'21' ));
        DB::table('width')->insert( array('id' => 22,'name' => '3100', 'num' =>'22' ));
        DB::table('width')->insert( array('id' => 23,'name' => '3200', 'num' =>'23' ));
        DB::table('width')->insert( array('id' => 24,'name' => '3300', 'num' =>'24' ));
        DB::table('width')->insert( array('id' => 25,'name' => '3400', 'num' =>'25' ));
        DB::table('width')->insert( array('id' => 26,'name' => '3500', 'num' =>'26' ));
        DB::table('width')->insert( array('id' => 27,'name' => '3600', 'num' =>'27' ));
        DB::table('width')->insert( array('id' => 28,'name' => '3700', 'num' =>'28' ));
        DB::table('width')->insert( array('id' => 29,'name' => '3800', 'num' =>'29' ));
        DB::table('width')->insert( array('id' => 30,'name' => '3900', 'num' =>'30' ));
        DB::table('width')->insert( array('id' => 31,'name' => '4000', 'num' =>'31' ));
        DB::table('width')->insert( array('id' => 32,'name' => '4100', 'num' =>'32' ));
        DB::table('width')->insert( array('id' => 33,'name' => '4200', 'num' =>'33' ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('width');
    }
}
