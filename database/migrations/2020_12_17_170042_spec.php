<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Spec extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('spec', function (Blueprint $table) {
             $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id()->unique();
            $table->string('name');
            $table->string('num')->unique();
        });
        DB::table('spec')->insert( array('id' => 1,'name' => 'Квадратный', 'num' =>'1' ));
        DB::table('spec')->insert( array('id' => 2,'name' => 'Прямоуголный', 'num' =>'2' ));
        DB::table('spec')->insert( array('id' => 3,'name' => 'Круглый', 'num' =>'3' ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spec');
        //
    }
}
