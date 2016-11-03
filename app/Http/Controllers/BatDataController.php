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

    public function query_bat_vol($id)
    {
        $bat_data = BatData::find($id);
        if(!$bat_data){
            return $this->responseNotFound();
        }
        return $this->response([
            'status'=>'success',
            'data'=>$bat_data->vol
        ]);
    }
}
