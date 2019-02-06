<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    protected $table='teachers';
    protected $primaryKey='t_id';
    public $timestamps=false;
}
