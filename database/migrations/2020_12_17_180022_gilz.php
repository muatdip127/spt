<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Gilz extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('gilz', function (Blueprint $table) {
             $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id()->unique();
            $table->string('name');
            $table->string('num')->unique();
            
           
            
                    });
         DB::table('gilz')->insert( array('id' => 1,'name' => 'нет', 'num' =>'0' ));
            DB::table('gilz')->insert( array('id' => 2,'name' => 'д 50 металлическая', 'num' =>'1' ));
            DB::table('gilz')->insert( array('id' => 3,'name' => 'д 65 металлическая', 'num' =>'2' ));
            DB::table('gilz')->insert( array('id' => 4,'name' => 'д 80 металлическая', 'num' =>'3' ));
            DB::table('gilz')->insert( array('id' => 5,'name' => 'д 100 металлическая', 'num' =>'4' ));
            DB::table('gilz')->insert( array('id' => 6,'name' => 'д 125 металлическая', 'num' =>'5' ));
            DB::table('gilz')->insert( array('id' => 7,'name' => 'д 150 металлическая', 'num' =>'6' ));
            DB::table('gilz')->insert( array('id' => 8,'name' => 'д 200 металлическая', 'num' =>'7' ));
            DB::table('gilz')->insert( array('id' => 9,'name' => 'д 250 металлическая', 'num' =>'8' ));
            DB::table('gilz')->insert( array('id' => 10,'name' => 'д 300 металлическая', 'num' =>'9' ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('gilz');
    }
}
