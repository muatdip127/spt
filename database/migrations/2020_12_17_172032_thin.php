<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Thin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('thin', function (Blueprint $table) {
             $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id()->unique();
            $table->string('name');
            $table->integer('num')->unique();
        });
        DB::table('thin')->insert( array('id' => 1,'name' => '3', 'num' =>1 ));
        DB::table('thin')->insert( array('id' => 2,'name' => '4', 'num' =>2 ));
        DB::table('thin')->insert( array('id' => 3,'name' => '5', 'num' =>3 ));
        DB::table('thin')->insert( array('id' => 4,'name' => '6', 'num' =>4 ));
        DB::table('thin')->insert( array('id' => 5,'name' => '7', 'num' =>5 ));
        DB::table('thin')->insert( array('id' => 6,'name' => '8', 'num' =>6 ));
        DB::table('thin')->insert( array('id' => 7,'name' => '9', 'num' =>7 ));
        DB::table('thin')->insert( array('id' => 8,'name' => '10', 'num' =>8 ));
        DB::table('thin')->insert( array('id' => 9,'name' => '11', 'num' =>9 ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        
        Schema::dropIfExists('thin');
    }
}
