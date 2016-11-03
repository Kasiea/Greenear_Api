<?php

namespace App\Http\Controllers;

use App\BMSInfo;
use Illuminate\Http\Request;

use App\Http\Requests;

class BMSInfoController extends ApiController
{
    //
    public function index()
    {
        $bms_infos = BMSInfo::all();
        return $this->response([
                'status'=>'success',
                'status_code'=>200,
                'data'=>$bms_infos
        ]);
    }


    public function query($id)
    {
        $bms_info = BMSInfo::find($id);
        if(!$bms_info){
            return $this->responseNotFound();
        }
        return $this->response([
                'status'=>'success',
                'data'=>$bms_info
            ]

        );
    }
}
