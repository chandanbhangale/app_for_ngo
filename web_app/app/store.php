<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    protected $table='store';
    protected $primaryKey='i_id';
    public $timestamps=false;
}
