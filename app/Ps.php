<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ps extends Model
{
    //
    protected $table = "ps";
    protected $fillable = ['id','ps_perhari','ps_overtime','ps_foto'];



}
