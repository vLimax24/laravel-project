<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{

    protected $table = 'planes';
    protected $primaryKey = 'plane_id';
    protected $connection = 'sqlite';
    use HasFactory;

    protected $fillable = ['name', 'manufacturer', 'model', 'year'];
}
