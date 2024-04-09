<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelVehicles extends Model
{
    use HasFactory;
    protected $table = 'vehicles';
    protected $primaryKey = 'id';
    protected $created_at = 'created_at';
    protected $fillable = ['brand', 'model', 'plate', 'licenseRiquered'];
}
