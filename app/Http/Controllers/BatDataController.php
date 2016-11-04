<?php

namespace App\Http\Controllers;

use App\BatData;
use Illuminate\Http\Request;

use App\Http\Requests;

class BatDataController extends ApiController
{
    public function index()
    {
        $bat_datas = BatData::all();
        return $this->response([
            'status'=>'success',
            'status_code'=>200,
            'data'=>$bat_datas
        ]);
    }

    public function query_bat($id)
    {
        $bat_data = BatData::find($id)->where('bms_id',1)->first();
        if(!$bat_data){
            return $this->responseNotFound();
        }
        return $this->response([
            'status'=>'success',
            'data'=>$bat_data
        ]);

    }

    public function query_bat_work($bms_id)
    {
        $bat_data = BatData::find($bms_id)->where('bat_id',1)->select('soc',
            'soh','res','vol')->first();
        if(!$bat_data){
            return $this->responseNotFound();
        }
        return $this->response([
            'status'=>'success',
            'data'=>$bat_data
        ]);
    }
}
