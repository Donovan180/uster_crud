<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelDrivers extends Model
{
    use HasFactory;
    protected $table = 'drivers';
    protected $primaryKey = 'id';
    protected $created_at = 'created_at';
    protected $fillable = ['name', 'surname', 'license'];
}
