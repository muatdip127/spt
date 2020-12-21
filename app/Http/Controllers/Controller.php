<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\gilz;
use App\height;
use App\insection;
use App\length;
use App\num_ins;
use App\outgo;
use App\serface;
use App\spec;
use App\stairs;
use App\thin;
use App\width;
use App\name;
use App\art;
use DB;
use Illuminate\Http\Request;
use Artisan;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $prop = array('spec','thin','width','length','height','serface','stairs','insection','num_ins','outgo','gilz');
    
    public function get_art()
    {
        return art::select(DB::raw("concat(name.num,spec.num,thin.num,length.num,width.num,height.num,serface.num,stairs.num,insection.num,num_ins.num,outgo.num,gilz.num) as art"),
                           'art.id as id','name_id','spec_id','thin_id','width_id','length_id','height_id','serface_id','stairs_id','insection_id','num_ins_id','outgo_id','gilz_id',
                           'name.name as namename','name.num as namenum',
                           'spec.name as specname','spec.num as specnum',
                           'thin.name as thinname','thin.num as thinnum',
                           'width.name as widthname','width.num as widthnum',
                           'length.name as lengthname','length.num as lengthnum',
                           'height.name as heightname','height.num as heightnum',
                           'serface.name as serfacename','serface.num as serfacenum',
                           'stairs.name as stairsname','stairs.num as stairsnum',
                           'insection.name as insectionname','insection.num as insectionnum',
                           'num_ins.name as num_insname','num_ins.num as num_insnum',
                           'outgo.name as outgoname','outgo.num as outgonum',
                           'gilz.name as gilzname','gilz.num as gilznum')
        ->join('name','name.id','=','name_id')->
        join('spec','spec.id','=','spec_id')->
        join('thin','thin.id','=','thin_id')->
        join('width','width.id','=','width_id')->
        join('length','length.id','=','length_id')->
        join('height','height.id','=','height_id')->
        join('serface','serface.id','=','serface_id')->
        join('stairs','stairs.id','=','stairs_id')->
        join('insection','insection.id','=','insection_id')->
        join('num_ins','num_ins.id','=','num_ins_id')->
        join('outgo','outgo.id','=','outgo_id')->
        join('gilz','gilz.id','=','gilz_id')->
        get();
    }
    
    public function migrate()
    {
        Artisan::call('migrate', array('--path' => 'app/migrations', '--force' => true));
    }
    public function get_arts(Request $request)
    {
        $d = $request->input('pr');
        return art::select(DB::raw("concat(name.num,spec.num,thin.num,length.num,width.num,height.num,serface.num,stairs.num,insection.num,num_ins.num,outgo.num,gilz.num) as art"),
                           'art.id as id','name_id','spec_id','thin_id','width_id','length_id','height_id','serface_id','stairs_id','insection_id','num_ins_id','outgo_id','gilz_id',
                           'name.name as namename','name.num as namenum',
                           'spec.name as specname','spec.num as specnum',
                           'thin.name as thinname','thin.num as thinnum',
                           'width.name as widthname','width.num as widthnum',
                           'length.name as lengthname','length.num as lengthnum',
                           'height.name as heightname','height.num as heightnum',
                           'serface.name as serfacename','serface.num as serfacenum',
                           'stairs.name as stairsname','stairs.num as stairsnum',
                           'insection.name as insectionname','insection.num as insectionnum',
                           'num_ins.name as num_insname','num_ins.num as num_insnum',
                           'outgo.name as outgoname','outgo.num as outgonum',
                           'gilz.name as gilzname','gilz.num as gilznum')
        ->join('name','name.id','=','name_id')->
        join('spec','spec.id','=','spec_id')->
        join('thin','thin.id','=','thin_id')->
        join('width','width.id','=','width_id')->
        join('length','length.id','=','length_id')->
        join('height','height.id','=','height_id')->
        join('serface','serface.id','=','serface_id')->
        join('stairs','stairs.id','=','stairs_id')->
        join('insection','insection.id','=','insection_id')->
        join('num_ins','num_ins.id','=','num_ins_id')->
        join('outgo','outgo.id','=','outgo_id')->
        join('gilz','gilz.id','=','gilz_id')->
        where('name.id','=',$d['name'])->
        where('spec.id','=',$d['spec'])->
        where('thin.id','=',$d['thin'])->
        where('width.id','=',$d['width'])->
        where('length.id','=',$d['vlength'])->
        where('height.id','=',$d['height'])->
        where('serface.id','=',$d['serface'])->
        where('stairs.id','=',$d['stairs'])->
        where('insection.id','=',$d['insection'])->
        where('num_ins.id','=',$d['num_ins'])->
        where('outgo.id','=',$d['outgo'])->
        where('gilz.id','=',$d['gilz'])->
        get();
    }
    
    public function get_prop()
    {
        $arr = array('name'=>name::get(),'spec'=>spec::get(),'thin'=>thin::get(),'width'=>width::get(),
                     'vlength'=>length::get(),'height'=>height::get(),'serface'=>serface::get(),'stairs'=>stairs::get(),
                     'insection'=>insection::get(),'num_ins'=>num_ins::get(),'outgo'=>outgo::get(),'gilz'=>gilz::get());
        return $arr;
    }
    
   
    

}
