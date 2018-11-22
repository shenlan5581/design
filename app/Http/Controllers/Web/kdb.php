<?php

namespace App\Http\Controllers\kdb;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class  kdb extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function kdb(){
         $tb = 'fw_member';

        //原始查询
        $ret = DB::select('select * from '.$tb.' where m_id =?',[2]);
        
        //获取表
        $ret = DB::table($tb)->get();

        //条件检
        $ret = DB::table($tb)->where('m_id','2')->get();
        
        //获取条件检索中的某个值 (单个值 不需要整行)
        $ret = DB::table($tb)->where('m_id','11')->value('m_nickname');
        
        //获取某表 (列值) 多列
        $ret = DB::table($tb)->pluck('m_integral','m_tel');
        
        //获取某表 count
        $ret = DB::table($tb)->count();
        
        // 获取某列最大值  最小值
        $ret = DB::table($tb)->min('m_integral');
        
        // 某值是否存在
        $ret = DB::table($tb)->where('m_integral',2)->exists();
        
        // leftjoin
        $ret = DB::table($tb)->leftjoin('fw_order','fw_order.o_m_id','=',$tb.'.m_id')->where($tb.'.m_id',37)->get();
         


        print_r($ret);
    }
}