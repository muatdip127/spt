<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Insection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('insection', function (Blueprint $table) {
             $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id()->unique();
            $table->string('name');
            $table->string('num')->unique();
        });
        DB::table('insection')->insert( array('id' => 1,'name' => 'нет', 'num' =>'0' ));
        DB::table('insection')->insert( array('id' => 2,'name' => '16', 'num' =>'1' ));
        DB::table('insection')->insert( array('id' => 3,'name' => '25', 'num' =>'2' ));
        DB::table('insection')->insert( array('id' => 4,'name' => '32', 'num' =>'3' ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('insection');
    }
}
