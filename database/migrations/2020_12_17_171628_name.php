<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Name extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('name', function (Blueprint $table) {
             $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id()->unique();
            $table->string('name');
            $table->string('num')->unique();
        });
        DB::table('name')->insert( array('id' => 1,'name' => 'Кессон металлический', 'num' =>'1' ));
        DB::table('name')->insert( array('id' => 2,'name' => 'Кессон пластиковый', 'num' =>'2' ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('name');
        //
    }
}
