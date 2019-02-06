<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donors extends Model
{
     protected $table='donors';
    protected $primaryKey='d_id';
    public $timestamps=true;
}
