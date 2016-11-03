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

    //特殊查找
    public function query_bms($bms_id)
    {
        $bms_info = BMSInfo::where('bms_id',$bms_id)->first();
        if(!$bms_info){
            return $this->responseNotFound();
        }
        return $this->response([
            'status'=>'success',
            'data'=>$bms_info
        ]);
    }
}
