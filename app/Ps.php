<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ps extends Model
{
    //
    protected $table = "ps";
    protected $fillable = ['ps_perhari','ps_overtime','ps_foto','ps_pdf'];



}
