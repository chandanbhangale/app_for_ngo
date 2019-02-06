<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class volunteer extends Model
{
    protected $table='volunteer';
    protected $primaryKey='v_id';
    public $timestamps=false;
}
