<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    protected $fillable = ['name_ar','name_en','details_ar','details_en','price','id'];

    public $timestamps = false;









}
