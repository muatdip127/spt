<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Height extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('height', function (Blueprint $table) {
             $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id()->unique();
            $table->string('name');
            $table->string('num')->unique();
        });
        DB::table('height')->insert( array('id' => 1,'name' => '2000', 'num' =>'1' ));
        DB::table('height')->insert( array('id' => 2,'name' => '2100', 'num' =>'2' ));
        DB::table('height')->insert( array('id' => 3,'name' => '2200', 'num' =>'3' ));
        DB::table('height')->insert( array('id' => 4,'name' => '2300', 'num' =>'4' ));
        DB::table('height')->insert( array('id' => 5,'name' => '2400', 'num' =>'5' ));
        DB::table('height')->insert( array('id' => 6,'name' => '2500', 'num' =>'6' ));
        DB::table('height')->insert( array('id' => 7,'name' => '2600', 'num' =>'7' ));
        DB::table('height')->insert( array('id' => 8,'name' => '2700', 'num' =>'8' ));
        DB::table('height')->insert( array('id' => 9,'name' => '2800', 'num' =>'9' ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('height');
    }
}
