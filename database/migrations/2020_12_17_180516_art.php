<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Art extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('art', function (Blueprint $table) {
             $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id()->unique();
            $table->integer('spec_id');
            $table->integer('name_id');
            $table->integer('thin_id');
            $table->integer('width_id');
            $table->integer('length_id');
            $table->integer('height_id');
            $table->integer('serface_id');
            $table->integer('stairs_id');
            $table->integer('insection_id');
            $table->integer('num_ins_id');
            $table->integer('outgo_id');
            $table->integer('gilz_id');
            
            
           
            
                    });
         DB::table('art')->insert( array('id' => 1,'spec_id' => 1, 'name_id' =>1, 'thin_id'=>2,'width_id'=>1,'length_id'=>1,
                                             'height_id'=>1,'serface_id'=>1,'stairs_id'=>1,'insection_id'=>1,'num_ins_id'=>1,
                                             'outgo_id'=>1,'gilz_id'=>1));
            DB::table('art')->insert( array('id' => 2,'spec_id' => 1, 'name_id' =>1, 'thin_id'=>4,'width_id'=>6,'length_id'=>6,
                                             'height_id'=>4,'serface_id'=>1,'stairs_id'=>1,'insection_id'=>1,'num_ins_id'=>1,
                                             'outgo_id'=>1,'gilz_id'=>1));
            DB::table('art')->insert( array('id' => 3,'spec_id' => 1, 'name_id' =>1, 'thin_id'=>2,'width_id'=>3,'length_id'=>3,
                                             'height_id'=>1,'serface_id'=>1,'stairs_id'=>1,'insection_id'=>4,'num_ins_id'=>4,
                                             'outgo_id'=>1,'gilz_id'=>2));
            DB::table('art')->insert( array('id' => 4,'spec_id' => 1, 'name_id' =>1, 'thin_id'=>2,'width_id'=>3,'length_id'=>3,
                                             'height_id'=>1,'serface_id'=>1,'stairs_id'=>1,'insection_id'=>1,'num_ins_id'=>1,
                                             'outgo_id'=>1,'gilz_id'=>1));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('art');
    }
}
