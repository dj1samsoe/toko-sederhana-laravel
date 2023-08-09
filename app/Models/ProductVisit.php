<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVisit extends Model
{
    protected $fillable = ['visits', 'visit_date'];

    protected $dates = ['visit_date'];
}