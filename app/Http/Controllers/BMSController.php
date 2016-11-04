<?php

namespace App\Http\Controllers;

use App\BMS;
use Illuminate\Http\Request;

use App\Http\Requests;

class BMSController extends Controller
{
    //
    public function index()
    {
        $bmss = BMS::all();
        return $this->response([
            'status'=>'success',
            'status_code'=>200,
            'data'=>$bmss
        ]);
    }
}
