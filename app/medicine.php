<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicine extends Model
{
    protected $table = 'medicine';
    protected $fillable = ['name','dosage','expiry','desc','effects','image'];//columns in database
    protected $primaryKey = 'id';
}
