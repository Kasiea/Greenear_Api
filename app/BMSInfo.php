<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BMSInfo extends Model
{
    //
    protected $table = 'bms_data';

    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * 不可被批量赋值的属性。
     *
     * @var array
     */
    protected $guarded = ['bms_id'];
}
