<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTrips extends Model
{
    use HasFactory;
    protected $table = 'trip';
    protected $primaryKey = 'idTrip';
    protected $created_at = 'created_at';
    protected $fillable = ['vehicle', 'driver', 'date'];
}
