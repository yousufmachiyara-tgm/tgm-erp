<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class ProductMeasurementUnit extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
}
