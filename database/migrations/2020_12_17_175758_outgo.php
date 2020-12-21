<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Outgo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('outgo', function (Blueprint $table) {
             $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id()->unique();
            $table->string('name');
            $table->string('num')->unique();
            
           
        });
        DB::table('outgo')->insert( array('id' => 1,'name' => 'нет', 'num' =>'0' ));
        DB::table('outgo')->insert( array('id' => 2,'name' => '50', 'num' =>'1' ));
        DB::table('outgo')->insert( array('id' => 3,'name' => '100', 'num' =>'2' ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('outgo');
    }
}
