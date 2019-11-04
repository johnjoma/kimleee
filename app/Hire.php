<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hire extends Model
{
    protected $fillable=['name','email','type','subject','document'];
}
