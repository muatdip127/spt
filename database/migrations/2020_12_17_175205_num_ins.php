<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NumIns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('num_ins', function (Blueprint $table) {
             $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id()->unique();
            $table->string('name');
            $table->string('num')->unique();
          });
            DB::table('num_ins')->insert( array('id' => 1,'name' => 'нет', 'num' =>'0' ));
            DB::table('num_ins')->insert( array('id' => 2,'name' => '1', 'num' =>'1' ));
            DB::table('num_ins')->insert( array('id' => 3,'name' => '2', 'num' =>'2' ));
            DB::table('num_ins')->insert( array('id' => 4,'name' => '3', 'num' =>'3' ));
            DB::table('num_ins')->insert( array('id' => 5,'name' => '4', 'num' =>'4' ));
            DB::table('num_ins')->insert( array('id' => 6,'name' => '5', 'num' =>'5' ));
            DB::table('num_ins')->insert( array('id' => 7,'name' => '6', 'num' =>'6' ));
            DB::table('num_ins')->insert( array('id' => 8,'name' => '7', 'num' =>'7' ));
            DB::table('num_ins')->insert( array('id' => 9,'name' => '8', 'num' =>'8' ));
            DB::table('num_ins')->insert( array('id' => 10,'name' => '9', 'num' =>'9' ));
            DB::table('num_ins')->insert( array('id' => 11,'name' => '10', 'num' =>'10' ));
            DB::table('num_ins')->insert( array('id' => 12,'name' => '11', 'num' =>'11' ));
            DB::table('num_ins')->insert( array('id' => 13,'name' => '12', 'num' =>'12' ));
            DB::table('num_ins')->insert( array('id' => 14,'name' => '13', 'num' =>'13' ));
            DB::table('num_ins')->insert( array('id' => 15,'name' => '14', 'num' =>'14' ));
            DB::table('num_ins')->insert( array('id' => 16,'name' => '15', 'num' =>'15' ));
            DB::table('num_ins')->insert( array('id' => 17,'name' => '16', 'num' =>'16' ));
            DB::table('num_ins')->insert( array('id' => 18,'name' => '17', 'num' =>'17' ));
            DB::table('num_ins')->insert( array('id' => 19,'name' => '18', 'num' =>'18' ));
            DB::table('num_ins')->insert( array('id' => 20,'name' => '19', 'num' =>'19' ));
            DB::table('num_ins')->insert( array('id' => 21,'name' => '20', 'num' =>'20' ));
            DB::table('num_ins')->insert( array('id' => 22,'name' => '21', 'num' =>'21' ));
            DB::table('num_ins')->insert( array('id' => 23,'name' => '22', 'num' =>'22' ));
            DB::table('num_ins')->insert( array('id' => 24,'name' => '23', 'num' =>'23' ));
            DB::table('num_ins')->insert( array('id' => 25,'name' => '24', 'num' =>'24' ));
            DB::table('num_ins')->insert( array('id' => 26,'name' => '25', 'num' =>'25' ));
            DB::table('num_ins')->insert( array('id' => 27,'name' => '26', 'num' =>'26' ));
            DB::table('num_ins')->insert( array('id' => 28,'name' => '27', 'num' =>'27' ));
            DB::table('num_ins')->insert( array('id' => 29,'name' => '28', 'num' =>'28' ));
            DB::table('num_ins')->insert( array('id' => 30,'name' => '29', 'num' =>'29' ));
            DB::table('num_ins')->insert( array('id' => 31,'name' => '30', 'num' =>'30' ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('num_ins');
    }
}
