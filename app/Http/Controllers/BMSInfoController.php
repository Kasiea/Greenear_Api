<?php

namespace App\Http\Controllers;

use App\BMSInfo;
use Illuminate\Http\Request;

use App\Http\Requests;

class BMSInfoController extends ApiController
{
    //显示所有数据
    public function index()
    {
        $bms_infos = BMSInfo::all();
        return $this->response([
                'status'=>'success',
                'status_code'=>200,
                'data'=>$bms_infos
        ]);
    }


    //显示某id对应数据
    public function query($id)
    {
        $bms_info = BMSInfo::find($id);
        if(!$bms_info){
            return $this->responseNotFound();
        }
            return $this->response([
                'status'=>'success',
                'data'=>$bms_info
            ]);
    }

    //特殊查找特定bms的所有数据
    public function query_bms($bms_id)
    {
        $bms_info = BMSInfo::where('bms_id',$bms_id)->get();
        if(!$bms_info){
            return $this->responseNotFound();
        }
        return $this->response([
            'status'=>'success',
            'data'=>$bms_info
        ]);
    }

    //只查询BMS工作状态相关数据
    public function query_bms_work($bms_id)
    {
        $bms_info = BMSInfo::where('bms_id',$bms_id)->select('soc','soh','vol',
            'res','env_temp','curr','dc_status')->get();
        if(!$bms_info){
            return $this->responseNotFound();
        }
        return $this->response([
            'status'=>'success',
            'data'=>$bms_info
        ]);

    }

    //只查询GPS相关数据，且查询最新信息
    public function query_gps($bms_id)
    {
        $bms_info = BMSInfo::where('bms_id',$bms_id)->select('longitude','latitude')->orderBy('created_at',
            'desc')->first();
        if(!$bms_info){
            return $this->responseNotFound();
        }
        return $this->response([
            'status'=>'success',
            'data'=>$bms_info
        ]);

    }
}
