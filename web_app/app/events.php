<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    protected $table='events';
    protected $primaryKey='e_id';
    public $timestamps=false;
}
